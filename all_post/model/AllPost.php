<?php

namespace all_post\model;
use core\data\model\PDOData;

require_once("core/data/PDOData.php");

class AllPost {
  public function __contruct() {

  }

  public function getRecentPostRight(){
    $db = new PDOData();
    $data = $db->doQuery("
      select p.*, l.city
      from post p
      inner join location l
      on l.post_id = p.post_id
      order by p.publish_date desc limit 2;
    ");

    return $data;
  }

  public function getArchives(){
    $db = new PDOData();
    $data = $db->doQuery("
      select  concat(year(publish_date), \"/\", month(publish_date)) as archived_date,
              count(post_id) as post_count
      from ttd_travel.post
      group by year(publish_date), month(publish_date) desc;
    ");

    return $data;
  }

  public function getCategories(){
    $db = new PDOData();
    $data = $db->doQuery("
      select c.continent_name, count(p.post_id) as post_count
      from post p
      inner join location l
      on l.post_id = p.post_id
      inner join continent c
      on c.continent_id = l.continent_id
      group by c.continent_name;
    ");

    return $data;
  }

  public function getPostByPage($pageNumber, $pageSize) {
    $db = new PDOData();
    $rows = $db->doQuery("
      select p.*, l.city
      from post p
      inner join location l
      on l.post_id = p.post_id
      order by p.publish_date desc;
    ");

    $beginIndex = $pageNumber * $pageSize;
    $endIndex = $beginIndex  + $pageSize;
    if ($beginIndex > count($rows)) $beginIndex = count($rows);
    if ($endIndex > count($rows)) $endIndex = count($rows);

    $ret = array();
    for ($i = $beginIndex; $i < $endIndex; $i++)
    $ret[] = $rows[$i];

    return $ret;
  }

  public function getPostPageCount($pageSize) {
    $db = new PDOData();
    $rows = $db->doQuery("
      select p.*, l.city
      from post p
      inner join location l
      on l.post_id = p.post_id
      order by p.publish_date desc;
    ");
    $ret = floor(count($rows) / $pageSize);
    if (count($rows) % $pageSize > 0) $ret++;
    return $ret;
  }
}
