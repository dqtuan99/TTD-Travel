<?php

namespace post\view;

class PostView {
  private $data;

  public function __construct($data) {
    $this->data = $data;
  }

  public function recentPostView() {
    $html = "";
    foreach ($this->data as $row){
      $string = $row["text"];
      $string = (strlen($string) > 200) ? substr($string, 0, 190).'...' : $string;
      $html .= '
      <li class="postcontent">
        <div class="image-container">
          <div class="hovereffect">
            <img class="rounded img-responsive" src="'.$row["thumbnail_img"].'">
          </div>

        </div>
        <div class="content-container">
          <h3 class="post-title hvr-animation-blue" href="#detailPostModal" data-toggle="modal">'.$row["title"].'</h3>
          <div class="datetime-location" style="font-size: 14px;">
            <footer class="blockquote-footer">
              <span>'.$row["publish_date"].'</span>
              <span class="location hvr-animation-blue">'.$row["city"].'</span>
            </footer>
          </div>
          <div class="datetime-location" style="font-size: 14px;">
            <footer class="blockquote-footer">
              <span>Published by </span>
              <span class="username hvr-animation-blue">@tuank62ie1</span>
            </footer>
          </div>
          <p>
            '.$string.'
          </p>

          <div class="button-group2">
            <ul class="button-nav2">
              <li class="nav-element2">
                <button type="button" class="btn postbtn"><i class="far fa-thumbs-up"></i> Like </button>
              </li>
              <li class="nav-element2">
                <button type="button" class="btn postbtn"><i class="far fa-heart"></i> Love </button>
              </li>
              <li class="nav-element2">
                <button type="button" class="btn postbtn" href="#detailPostModal" data-toggle="modal"><i class="far fa-comment"></i> Comment </button>
              </li>
            </ul>
          </div>
        </div>
      </li>
      <div class="line "><hr></div>
      ';
    }

     return $html;
  }

  public function allDestinationView() {
    $html = "";
    foreach ($this->data as $row){
      $html .= '
      <div class="col-sm-4 col-des" style="margin-top:20px;">
        <div class="card">
          <div class="hovereffect2">
          <a href="asian.html">
            <img class="card-img-top" src="'.$row["thumbnail_img"].'">
          </a>
        </div>
          <div class="card-body">
            <a class="title-post" href="" ><h5 class="card-title hvr-animation-blue">
              '.$row["continent_name"].'
            </h5></a>
            <p class="card-text">
              '.$row["description"].'
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">
              Last updated: '.$row["publish_date"].'
            </small>
          </div>
        </div>
      </div>
      ';
    }

    return $html;
  }

}
