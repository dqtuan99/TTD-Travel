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
      $string = (strlen($string) > 300) ? substr($string, 0, 290).'...' : $string;
      $html .= '
      <li class="postcontent">
        <div class="image-container">
          <div class="hovereffect">
            <img class="rounded img-responsive" src="'.$row["thumbnail_img"].'"
            href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">
          </div>

        </div>
        <div class="content-container">
          <h3 class="post-title hvr-animation-blue" href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">'.$row["title"].'</h3>
          <div class="datetime-location" style="font-size: 14px;">
            <footer class="blockquote-footer">
              <span>'.$row["publish_date"].'</span>
              <span class="location hvr-animation-blue">'.$row["city"].'</span>
            </footer>
          </div>
          <div class="datetime-location" style="font-size: 14px;">
            <footer class="blockquote-footer">
              <span>Published by </span>
              <span class="username hvr-animation-blue">@qtuan99</span>
            </footer>
          </div>
          <p>
            '.$string.'
            <span class="read-more hvr-animation-blue" href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">Continue reading ></span>
          </p>



        </div>
      </li>
      <div class="line "><hr></div>
      ';
    }

     return $html;
  }

  // <div class="button-group2">
  //   <ul class="button-nav2">
  //     <li class="nav-element2">
  //       <button type="button" class="btn postbtn"><i class="far fa-thumbs-up"></i> Like </button>
  //     </li>
  //     <li class="nav-element2">
  //       <button type="button" class="btn postbtn"><i class="far fa-heart"></i> Love </button>
  //     </li>
  //     <li class="nav-element2">
  //       <button type="button" class="btn postbtn" href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">
  //       <i class="far fa-comment"></i> Comment </button>
  //     </li>
  //   </ul>
  // </div>

  public function allDestinationView() {
    $html = "";
    foreach ($this->data as $row){
      $continent = strtolower($row["continent_name"]);
      $continent = str_replace(' ', '', $continent);
      $html .= '
      <div class="col-sm-4 col-des" style="margin-top:20px;">
        <div class="card">
          <div class="hovereffect2">
          <a href="./all_post.php?categories='.$continent.'">
            <img class="card-img-top" src="'.$row["thumbnail_img"].'">
          </a>
        </div>
          <div class="card-body">
            <a class="title-post" href="./all_post.php?categories='.$continent.'"><h5 class="card-title hvr-animation-blue">
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

  public function recentPostModalView() {
    $html = "";
    foreach ($this->data as $row){
      $img_arr = explode(",", $row["img_list"]);
      echo $row["like_count"];

      $html .= '
      <div id="detailPostModal'.$row["post_id"].'" class="modal fade">
        <div class="modal-dialog modal-lg modal-post">
          <div class="modal-content">
            <div class="modal-body">
              <div class="post-container">
                <div class="user-container row">
                  <div class="col-sm-1">
                    <img class="avatar" src="images/avatar.jpg" alt="">
                  </div>
                  <div class="col-sm" style="margin: 0; padding: 0; margin-left: 5px;">
                    <div class="row fullname"><h5 class="font-weight-bold hvr-animation-black">'.$row["fullname"].'</h5></div>
                    <div class="row username" style="margin-top: 1px;"><h6>@'.$row["username"].'</h6></div>
                  </div>
                </div>
                <div class="text-container">
                  <h2 class="post-title font-weight-bold">'.$row["title"].'</h2>
                  <p class="post-text">
                    '.$row["text"].'
                  </p>
                </div>
                <div class="image-container">
                  <div id="modal-slide'.$row["post_id"].'" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">';
                    $i = 0;
                    foreach ($img_arr as $img){
                      if ($i == 0){
                        $html .= '
                          <li data-target="#modal-slide'.$row["post_id"].'" data-slide-to="'.$i.'" class="active"></li>
                        ';
                      }
                      else {
                        $html .= '
                        <li data-target="#modal-slide'.$row["post_id"].'" data-slide-to="'.$i.'"></li>
                        ';
                      }
                      ++$i;
                    }
                    $html .= '
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">';
                    $i = 0;
                    foreach ($img_arr as $img){
                      if ($i == 0){
                        $html .= '
                        <div class="carousel-item active"><img src="'.$img.'"></div>
                        ';
                      }
                      else {
                        $html .= '
                        <div class="carousel-item"><img src="'.$img.'"></div>
                        ';
                      }
                      ++$i;
                    }
                    $html .= '
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#modal-slide'.$row["post_id"].'" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#modal-slide'.$row["post_id"].'" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  </div>
                </div>
                <div class="datetime-location">
                  <footer class="blockquote-footer">
                    <span>'.$row["publish_date"].'</span><span class="location hvr-animation-blue">  '.$row["city"].'</span>
                  </footer>
                </div>
                <hr class="horizontal-line">
                <div class="row counter-container">
                  <div class="col-sm-2">
                    <span class="post_like_counter" style="font-weight: bold;">'.$row["like_count"].'</span><span> Likes</span>
                  </div>
                  <div class="col-sm-2">
                    <span class="post_love_counter" style="font-weight: bold;">'.$row["love_count"].'</span><span> Loves</span>
                  </div>
                  <div class="col-sm-2">
                    <span class="post_comment_counter" style="font-weight: bold;"></span><span>Comments</span>
                  </div>
                </div>
                <hr class="horizontal-line">
                <div class="row button-container">
                  <div class="col-sm text-center">
                    <button type="button" class="like-btn circle-btn text-center post_like_btn">
                      <i class="far fa-thumbs-up"></i>
                    </button>
                  </div>
                  <div class="col-sm text-center">
                    <button type="button" class="love-btn circle-btn text-center post_love_btn">
                      <i class="far fa-heart"></i>
                    </button>
                  </div>
                  <div class="col-sm text-center">
                    <button type="button" class="cmt-btn circle-btn text-center post_comment_btn">
                      <i class="far fa-comment"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="comment-container">
              <div class="comment row">
                <div class="col-sm-1" style="margin-right: 10px;">
                  <img class="avatar" src="images/avatar.jpg" alt="">
                </div>
                <div class="col-sm" style="margin: 0; padding: 0;">
                  <div class="row">
                    <h5 class="font-weight-bold fullname hvr-animation-black">Do Quang Tuan</h5>
                    <span class="username" style="padding-left: 10px;">@qtuan99</span>
                  </div>
                  <div class="row">
                    <footer class="blockquote-footer">
                      <span>7:00 PM · Oct 19, 2019</span>
                    </footer>
                  </div>
                  <div class="row">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magnam expedita suscipit natus rerum, ducimus provident, nesciunt nam sint deleniti ad molestiae consectetur tempora eos quod aut quibusdam labore id!</div>
                  <div class="row" style="margin-left: -23px; margin-top: 3px;">
                    <div class="col-sm">
                      <button type="button" class="like-btn circle-btn text-center comment_like_btn">
                        <i class="far fa-thumbs-up"></i>
                      </button>
                      <span class="comment_like_counter" style="font-weight: bold;">3 </span>
                    </div>
                    <div class="col-sm">
                      <button type="button" class="dislike-btn circle-btn text-center comment_dislike_btn">
                        <i class="far fa-thumbs-down"></i>
                      </button>
                      <span class="comment_dislike_counter" style="font-weight: bold;">3 </span>
                    </div>
                    <div class="col-sm">
                      <button type="button" class="love-btn circle-btn text-center comment_love_btn">
                        <i class="far fa-heart"></i>
                      </button>
                      <span class="comment_love_counter" style="font-weight: bold;">3 </span>
                    </div>
                    <div class="col-sm">
                      <button type="button" class="cmt-btn circle-btn text-center comment_reply_btn">
                        <i class="far fa-comment"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="horizontal-line">';
              if (isset($_SESSION["username"])){
                $html .= '
                <div class="comment row">
                  <div class="col-sm-1" style="margin-right: 10px;">
                    <img class="avatar" src="'.$_SESSION["avatarPath"].'" alt="">
                  </div>
                  <div class="col-sm" style="margin: 0; padding: 0;">
                    <div class="row">
                      <textarea onfocus="cursorAtEnd(this);" placeholder="Write your comment here..."></textarea>
                    </div>
                    <div class="row">
                      <div class="col-sm-10"></div>
                      <div class="col-sm" style="padding-right: 0;">
                          <button type="button" class="btn post-button text-center">Comment</button>
                      </div>
                    </div>
                  </div>
                </div>
                ';
              }
            $html .= '
            </div>
          </div>
        </div>
      </div>

      ';
    }
    echo $html;

  }

}
