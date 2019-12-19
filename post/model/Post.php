<?php

namespace post\model;
use core\data\model\PDOData;

require_once("core/data/PDOData.php");

class Post {
  public function __contruct() {

  }

  public function getRecentPost() {
    $db = new PDOData();
    $data = $db->doQuery("
      select p.*, l.city
      from post p
      inner join location l
      on l.post_id = p.post_id
      order by p.publish_date desc limit 3;
    ");

    return $data;
  }

  public function getRecentDestination($continent) {
    $db = new PDOData();
    $data = $db->doPreparedQuery("
      select l.continent, p.publish_date
      from location l
      inner join post p
      on p.post_id = l.post_id
      where l.continent = ?
      group by l.continent
      order by p.publish_date desc;
    ", array($continent));

    return $data[0]["publish_date"];
  }

  public function getAllContinent() {
    $db = new PDOData();
    $data = $db->doQuery("
      select c.*, p.publish_date, p.thumbnail_img
      from location l
      inner join continent c
      on c.continent_id = l.continent_id
      inner join post p
      on p.post_id = l.post_id
      group by c.continent_id
      order by p.publish_date desc;
    ");

    return $data;
  }

  public function getRecentPostModal() {
    $db = new PDOData();
    $data = $db->doQuery("
      select 	p.*,
              group_concat(m.img_path) as img_list,
              group_concat(m.video_path) as video_list,
              u.username, u.fullname, u.avatarPath,
              l.city,
              sum(if(r.react_type = 1, 1, 0)) as like_count,
              sum(if(r.react_type = 2, 1, 0)) as love_count
      from post p
      inner join media m
      on m.post_id = p.post_id
      inner join user u
      on u.user_id = p.user_id
      inner join location l
      on l.post_id = p.post_id
      inner join react r
      on r.post_id = p.post_id
      group by p.post_id
      order by p.publish_date desc limit 3;
    ");

    return $data;
  }

  public function getPostCount() {
    $db = new PDOData();
    $data = $db->doQuery("
      select 	p.post_id, p.publish_date,
              sum(if(r.react_type = 1, 1, 0)) as like_count,
              sum(if(r.react_type = 2, 1, 0)) as love_count
      from post p
      inner join react r
      on p.post_id = r.post_id
      group by p.post_id
      order by p.publish_date desc limit 3;
    ");

    return $data;
  }

}
