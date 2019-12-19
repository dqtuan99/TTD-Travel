<?php

namespace post\control;

require_once("post/model/Post.php");
require_once("post/view/PostView.php");

class PostCtrl {
  public function __contruct() {

  }

  public function showRecentPost() {
    $post = new \post\model\Post();
    $data = $post->getRecentPost();
    $postview = new \post\view\PostView($data);

    echo $postview->recentPostView();
  }

  public function updateRecentDestination($continent) {
    $post = new \post\model\Post();
    $data = $post->getRecentDestination($continent);
    $postview = new \post\view\PostView($data);

    echo $postview->updateDestinationView();
  }

  public function showRecentDestination() {
    $post = new \post\model\Post();
    $data = $post->getAllContinent();
    $postview = new \post\view\PostView($data);

    echo $postview->allDestinationView();
  }

  public function showRecentPostModal() {
    $post = new \post\model\Post();
    $data = $post->getRecentPostModal();
    $count = $post->getPostCount();
    for ($i = 0; $i < count($data); ++$i){
      $data[$i]["like_count"] = $count[$i]["like_count"];
      $data[$i]["love_count"] = $count[$i]["love_count"];
    }

    $postview = new \post\view\PostView($data);

    echo $postview->recentPostModalView();
  }

}
