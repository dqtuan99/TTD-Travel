<?php
  require_once("account/control/AccountCtrl.php");
  $accountCtrl = new \account\control\AccountCtrl();
  $accountCtrl->checkAuthentication();
  $accountCtrl->checkSignUp();
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="./index.php"><span class="span-btn" style="color:#e31254;">Home</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./about.php"><span class="span-btn">About</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./all_post.php?categories=all"><span class="span-btn">Posts</span></a>
    </li>
    <div class="dropdown ">
      <li class="nav-item">
        <a class="nav-link" href=""><span class="span-btn">Destinations <i class="fas fa-caret-down"></i></span></a>
      </li>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item grow-lg" href="./all_post.php?categories=asia">Asia</a>
        <a class="dropdown-item grow-lg" href="./all_post.php?categories=africa">Africa</a>
        <a class="dropdown-item grow-lg" href="./all_post.php?categories=america">America</a>
        <a class="dropdown-item grow-lg" href="./all_post.php?categories=europe">Europe</a>
        <a class="dropdown-item grow-lg" href="./all_post.php?categories=northpole">North Pole</a>
        <a class="dropdown-item grow-lg" href="./all_post.php?categories=oceania">Oceania</a>
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
      <div class="dropdown ">
        <li class="nav-item">
          <?php $accountCtrl->showLoginBtn("first") ?>
        </li>
        <?php
          if (isset($_SESSION["fullname"])){
            echo '
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item grow-lg" href="./profile.php"><i class="fas fa-cog"></i> Manage profile</a>
            ';
            if ($_SESSION["isAdmin"] == 1){
              echo '
              <a class="dropdown-item grow-lg" href="./createpost.php"><i class="fas fa-plus"></i> Create new post</a>
              ';
            }
            echo '</div>';
          }
        ?>
      </div>
      <li class="nav-item ">
        <?php $accountCtrl->showLoginBtn("second") ?>
      </li>
    </div>
  </div>
</nav>

<!-- scrollbar -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<!-- scrollbar -->

<!-- signup modal -->
<div id="signupModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <form id="signup-form" method="post" action="">
        <input type="hidden" name="signupSubmitted" value="1"/>
        <div class="modal-header">
          <h4 class="modal-title">Sign up</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Username</label>
            <span class="error-message" id="username_error"></span>
            <input type="text" class="form-control" required="required" id="username" name="username"
            title="Username should contain only letters and numbers from 8 to 32 characters.">
          </div>
          <div class="form-group">
            <label>Full name</label>
            <span class="error-message" id="fullname_error"></span>
            <input type="text" class="form-control" required="required" id="fullname" name="fullname"
            title="Please enter a valid name. For example: Elon Musk.">
          </div>
          <div class="form-group">
            <label>Email</label>
            <span class="error-message" id="email_error"></span>
            <input type="text" class="form-control" required="required" id="email" name="email"
            title="Please enter a valid email address. For example: email_address@gmail.com.">
          </div>
          <div class="form-group">
            <label>Password</label>
            <span class="error-message" id="password_error"></span>
            <input type="password" class="form-control" required="required" id="password" name="password"
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
          <input type="button" class="btn btn-primary float-right" value="Sign up" onclick="checkSignup()">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- signup modal -->
