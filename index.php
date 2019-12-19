<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home | MyTravel</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
  integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/new-modal.css">
  <link rel="stylesheet" href="css/home.css">

  <link rel="stylesheet" href="font/font1/font.css">
  <link rel="stylesheet" href="font/font2/font.css">
  <link rel="stylesheet" href="font/font3/font.css">
  <link rel="stylesheet" href="font/font4/font.css">
  <link rel="stylesheet" href="font/font5/font.css">
  <link rel="stylesheet" href="font/font6/font.css">
  <link rel="stylesheet" href="font/font7/font.css">
  <link rel="stylesheet" href="font/font8/font.css">
  <link rel="stylesheet" href="font/font9/font.css">
  <link rel="stylesheet" href="font/font10/font.css">
</head>

<?php
  require_once("post/control/PostCtrl.php");
  require_once("account/control/AccountCtrl.php");
  $postCtrl = new \post\control\PostCtrl();
  $accountCtrl = new \account\control\AccountCtrl();
  $accountCtrl->checkAuthentication();
?>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href=""><span class="span-btn" style="color:#e31254;">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""><span class="span-btn">About</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=""><span class="span-btn">Posts</span></a>
      </li>
      <div class="dropdown ">
        <li class="nav-item">
          <a class="nav-link" href=""><span class="span-btn">Destinations <i class="fas fa-caret-down"></i></span></a>
        </li>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item grow-lg" href="asian.html">Asia</a>
          <a class="dropdown-item grow-lg" href="africa.html">Africa</a>
          <a class="dropdown-item grow-lg" href="america.html">America</a>
          <a class="dropdown-item grow-lg" href="europe.html">Europe</a>
          <a class="dropdown-item grow-lg" href="north-pole.html">North Pole</a>
          <a class="dropdown-item grow-lg" href="oceania.html">Oceania</a>
        </div>
      </div>
    </ul>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <form class="mx-2 my-auto d-inline">
          <div class="search-bar">
            <div class="input-group" >
              <input type="text" class="form-control border border-right-0" placeholder="Search...">
              <span class="input-group-append">
                <button class="btn btn-outline-secondary border border-left-0" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </div>
        </form>
        <li class="nav-item">
          <?php $accountCtrl->showLoginBtn("first") ?>
        </li>
        <li class="nav-item ">
          <?php $accountCtrl->showLoginBtn("second") ?>
        </li>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- scrollbar -->
  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
  <!-- scrollbar -->

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
  <!-- signup modal -->
  <div id="signupModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <form id="signup-form" method="post" action="">
          <div class="modal-header">
            <h4 class="modal-title">Sign up</h4>

          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Username</label>
              <span class="error-message" id="username_error"></span>
              <input type="text" class="form-control" required="required" id="username"
              title="Username should contain only letters and numbers from 8 to 32 characters.">
            </div>
            <div class="form-group">
              <label>Full name</label>
              <span class="error-message" id="fullname_error"></span>
              <input type="text" class="form-control" required="required" id="fullname"
              title="Please enter a valid name. For example: Elon Musk.">
            </div>
            <div class="form-group">
              <label>Email</label>
              <span class="error-message" id="email_error"></span>
              <input type="text" class="form-control" required="required" id="email"
              title="Please enter a valid email address. For example: email_address@gmail.com.">
            </div>
            <div class="form-group">
              <label>Password</label>
              <span class="error-message" id="password_error"></span>
              <input type="password" class="form-control" required="required" id="password"
              title="Password should contain only letters, numbers and /!@#$%^&*/ from 8 to 32 characters.">
            </div>
            <div class="form-group">
              <label>Confirm Password</label>
              <span class="error-message" id="repass_error"></span>
              <input type="password" class="form-control" required="required" id="repass"
              title="The password and confirmation password should match.">
            </div>
          </div>
          <!-- <div class="modal-footer">
            <input type="button" class="btn btn-primary center-block" value="Sign up" onclick='checkSignup()'>
          </div> -->
          <div class="modal-footer justify-content-between">
            <a href="#loginModal" data-toggle="modal" data-dismiss="modal">Already have an account?</a>
            <input type="button" class="btn btn-primary float-right" value="Login" onclick="checkSignup()">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- signup modal -->

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
