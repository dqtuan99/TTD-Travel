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

    $j = 0;
    for ($i = 0; $i < count($data); ++$i){
      if ($data[$i]["post_id"] == $data[$j]["post_id"]){
        $data[$i]["like_count"] = $count[$j]["like_count"];
        $data[$i]["love_count"] = $count[$j]["love_count"];
        ++$j;
        if ($j >= count($count)-1){
          --$j;
        }
      }
      else {
        $data[$i]["like_count"] = 0;
        $data[$i]["love_count"] = 0;
      }
    }
    $postview = new \post\view\PostView($data);

    echo $postview->recentPostModalView();
  }

}
