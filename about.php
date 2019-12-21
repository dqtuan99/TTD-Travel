<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("header.php"); ?>
  <title>About | TTDTravel</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Slabo+13px&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/new-modal.css">
  <link rel="stylesheet" href="css/home.css">
</head>

<body>
  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- navbar -->


  <!-- text and image title -->
  <div class="container2">
    <div class="text-center" >
      <p class="about-title" style="font-family: 'Playfair Display', serif; white-space: pre; color:#484a47;">ABOUT  TTDTRAVEL</p>
    </div>
    <!-- Slideshow container -->
    <style>
      /* Make the image fully responsive */
      .carousel-inner img {
        width: 100%;
        height: 100%;
      }
      </style>
      <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="width:90%;height:90%;margin-left:auto;margin-right:auto;">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(1).jpg"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">
          <p class="text-center inline-img" style="margin-bottom: 135px;">200 Posts</p></h3>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg"
            alt="Second slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive ">
            <p class="text-center inline-img" style="margin-bottom: 135px;">100 Authors</p>
          </h3>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
            alt="Third slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">
          <p class="text-center inline-img" style="margin-bottom: 135px;">Over 400 Users</p></h3>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
  <p class="about-ko text-center">Behaviour we improving at something to.
    Evil true high lady roof men had open.
    To projection considered it an melancholy or. Wound young you thing worse along being ham.
    Dissimilar of favourable solicitude if sympathize middletons at. Forfeited up if disposing perfectly
    <br>in an eagerness perceived necessary.
  </p>
  <p class="about-ko text-center">
    Her extensive perceived may any sincerity extremity. Indeed add rather may pretty see. Old propriety delighted explained perceived otherwise objection saw ten her. Doubt merit sir the
    <br>right these alone keeps. By sometimes intention smallness he
    <br> northward. mangirlislanndocean-beachwindow-flowers
  </p>
  <p class="about-ko text-center">
    Consisted we otherwise arranging commanded discovery it explained. Does cold even song like
    <br>two yet been. Literature interested announcing for terminated him inquietude day
    <br>shy. Himself he fertile chicken perhaps waiting if highest no it.
    <br>Continued promotion has consulted fat.
  </p>
  <p class="about-ko text-center" style="margin-bottom:40px;">
    Cheers, TTDTRAVEL.
  </p>
  <!-- Contact -->
  <div class="contact">
    <div class="row">
      <div class="col-sm-7" style="background-color:#e0e0e0;">
          <div class="row contact-text" style="height:100%; width:80%;">
             <p class="contact-title" >CONTACT
            </p>
             <p class="contact-info" >
             12 Dang Van Ngu Street, Dong Da, Ha Noi, Viet Nam
             thanh.nguyenba.z33@gmail.com
             +84-984-026-279
           </p>
             <div class="contact-btn">
               <i class="fab fa-facebook-f grow-xlg" style="width:10%;"></i>
               <i class="fab fa-instagram grow-xlg" style="width:10%;"></i>
               <i class="fas fa-money-bill-wave grow-xlg" style="width:10%;"></i>
             </div>
          </div>
      </div>
      <div class="col-sm-5"><img src="images/image5.jpg">
    </div>
  </div>
</div>


  <div id="signupModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <form id="signup-form" method="post" action="">
          <div class="modal-header">
            <h4 class="modal-title">Sign up</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
          <div class="modal-footer justify-content-between">
            <a href="#loginModal" data-toggle="modal" data-dismiss="modal">Already have an account?</a>
            <input type="button" class="btn btn-primary float-right" value="Login" onclick="checkSignup()">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="js/login_signup.js"></script>
  <script type="text/javascript" src="js/scrollbar.js"></script>
  </body>
</html>
