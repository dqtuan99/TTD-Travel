<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("header.php"); ?>
  <title>Home | MyTravel</title>

  <link rel="stylesheet" href="css/new-modal.css">
  <link rel="stylesheet" href="css/home.css">
</head>

<?php
  require_once("post/control/PostCtrl.php");
  $postCtrl = new \post\control\PostCtrl();
?>

<body>
  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- navbar -->

  <div class="container2">
    <div class="text-center" >
      <h1>TTDTRAVEL</h1>
      <div class="title"><p class="p-title"><span>All the lastest</span></div>
    </div>
    <!-- parallax -->
    <style>
    .parallax {
      /* The image used */
      background-image: url("images/title4.jpg");
      /* Set a specific height */
      height: 580px;
      /* Create the parallax scrolling effect */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    </style>
    <div class="parallax"></div>
    <!-- parallax -->

    <!-- destination -->
    <div class="destination-container">
      <h2 class="text-center">Recent Destinations</h2>
      <hr>
      <div style="clear:both;"></div>
      <div>
        <div class="row">
          <?php
            $postCtrl->showRecentDestination();
          ?>
        </div>
      </div>
      <hr>
    </div>
    <!-- destination -->

    <!-- recent post -->
    <div class="post-container2">
      <div class="post-header">
        <h2 class="text-center">Recent Posts</h2>
        <hr>
        <div style="clear:both;"></div>
      </div>
      <div class="post-list">
        <ul>
          <?php
            $postCtrl->showRecentPost();
          ?>
        </ul>
      </div>
    </div>
    <!-- recent post -->

    <!-- contact -->
    <div class="contact">
      <div class="row">
        <div class="col-sm-7" style="background-color:#e0e0e0;">
          <div class="row contact-text" style="height:100%; width:80%;">
            <p class="contact-title" >CONTACT<br>
            </p>
            <p class="contact-info" >
              12 Dang Van Ngu Street, Dong Da, Ha Noi, Viet Nam<br>
              thanh.nguyenba.z33@gmail.com<br>
              +84-984-026-279
            </p>
            <div class="contact-btn">
              <a href="http://www.facebook.com" style="color: black; text-decoration: none;">
                <i class="fab fa-facebook-f grow-xlg" style="width:10%;"></i>
              </a>
              <a href="http://www.instagram.com" style="color: black; text-decoration: none;">
                <i class="fab fa-instagram grow-xlg" style="width:10%;"></i>
              </a>
              <i class="fas fa-money-bill-wave grow-xlg" style="width:10%;"></i>
            </div>
          </div>
        </div>
        <div class="col-sm-5"><img src="images/image5.jpg">
        </div>
      </div>
    </div>
    <!-- contact -->

  </div>

  <!-- All modal here -->

  <!-- post detail modal -->
  <?php
    $postCtrl->showRecentPostModal();
  ?>
  <!-- post detail modal -->

  <!-- All modal here -->

  <script type="text/javascript" src="js/login_signup.js"></script>
  <script type="text/javascript" src="js/all-post.js"></script>
  <script type="text/javascript" src="js/scrollbar.js"></script>
</body>
</html>

<?php
