<?php

namespace all_post\control;

require_once("all_post/model/AllPost.php");
require_once("all_post/view/AllPostView.php");
require_once("all_post/view/AllPostListView.php");

class AllPostCtrl {
  public function __contruct() {

  }

  public function showRecentPostRight() {
    $all_post = new \all_post\model\AllPost();
    $data = $all_post->getRecentPostRight();
    $postview = new \all_post\view\AllPostView($data);

    echo $postview->recentPostRightView();
  }

  public function showArchives() {
    $all_post = new \all_post\model\AllPost();
    $data = $all_post->getArchives();
    $postview = new \all_post\view\AllPostView($data);

    echo $postview->archivesView();
  }

  public function showCategories() {
    $all_post = new \all_post\model\AllPost();
    $data = $all_post->getCategories();
    $postview = new \all_post\view\AllPostView($data);

    echo $postview->categoriesView();
  }

  public function showPostByPage(){
    $p = 1;
    if (isset($_GET["p"]) && is_numeric($_GET["p"])){
      $p = intval($_GET["p"]);
    }
    if (isset($_GET["categories"]) && $_GET["categories"] == "all"){
      $all_post = new \all_post\model\AllPost();
      $data = $all_post->getPostByPage($p-1, 3);
      $pageNumber = $all_post->getPostPageCount(3);

      $postview = new \all_post\view\AllPostListView($data, $pageNumber, $p-1, $_GET["categories"]);
      echo $postview->postByPageView();
    }
    else {
      echo "testing";
    }
  }
}
