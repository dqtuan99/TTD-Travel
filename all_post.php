<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("header.php"); ?>
  <title>All Posts | MyTravel</title>

  <link rel="stylesheet" href="css/new-modal.css">
  <link rel="stylesheet" href="css/all-post.css">
</head>

<?php
  require_once("all_post/control/AllPostCtrl.php");
  $allPostCtrl = new \all_post\control\AllPostCtrl();
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
  </div>

  <div class="all-post-container">
    <div class="all-post-left">
      <div class="zaptitle page_title_s2 ">
        <span class="page_info_title_s2"><h2>All posts</h2></span>
      </div>
      <div style="clear: both;"></div>
      <ul style="padding: 0; list-style: none;">
        <?php
          $allPostCtrl->showPostByPage();
        ?>
      </ul>
    </div>

    <div class="all-post-right">
      <div class="recent-post">
        <div class="zaptitle page_title_s2 ">
          <span class="page_info_title_s2"><h2>Recent posts</h2></span>
        </div>
        <div style="clear: both;"></div>
        <?php
          $allPostCtrl->showRecentPostRight();
        ?>
      </div>

      <div class="archives">
        <div class="zaptitle page_title_s2 ">
          <span class="page_info_title_s2"><h2>Archives</h2></span>
        </div>
        <ul class="archive-list">
          <?php
            $allPostCtrl->showArchives();
          ?>
        </ul>
      </div>
      <div class="categories">
        <div class="zaptitle page_title_s2">
          <span class="page_info_title_s2"><h2>Categories</h2></span>
        </div>
        <ul class="category-list">
          <?php
            $allPostCtrl->showCategories();
          ?>
        </ul>
      </div>
      <div class="advertise">
        <img src="images/advertise.jpg" alt="">
      </div>

    </div>
  </div>
</body>
</html>
