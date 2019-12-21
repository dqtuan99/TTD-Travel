<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    session_start();
    include("header.php");
  ?>
  <title>Profile | <?php echo $_SESSION["fullname"]; ?></title>
</head>

<body>
  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- navbar -->

    <div class="container2">
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
      		<div class="col-sm-3"><!--left col-->


          <div class="text-center">
            <img src="<?php echo $_SESSION["avatarPath"] ?>" class="avatar img-circle img-thumbnail" alt="avatar">
            <h6 style="margin-top: 5px;">Upload a photo</h6>
            <input type="file" class="text-center center-block file-upload" style="margin-left:0px; width:100%;">
          </div></hr><br>
              <ul></ul>
              <ul class="list-group">
                <li class="list-group-item text-muted">Social Media <i class="fa fa-dashboard fa-1x"></i></li>
                <li class="list-group-item text-right"><i class="fab fa-facebook-f grow-xlg" style="margin-left:7px;"></i>
                <i class="fab fa-instagram grow-xlg" style="margin-left:7px;"></i>
                <i class="fas fa-money-bill-wave grow-xlg" style="margin-left:7px;"></i></li>
              </ul>

            </div><!--/col-3-->
        	<div class="col-sm-9">

            <div class="tab-content">
              <div class="tab-pane active" id="home">
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Full name</h4></label>
                                <!-- <input type="text" class="form-control" name="full_name" id="full_name" placeholder="enter full name" title="enter your full name if any."> -->
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="<?php echo $_SESSION["fullname"]; ?>" title="enter your full name if any.">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                              <label for="last_name"><h4>Email</h4></label>
                                <!-- <input type="text" class="form-control" name="email" id="email" placeholder="enter email" title="enter your email if any."> -->
                                <input type="text" class="form-control" name="email" id="email" placeholder="<?php echo $_SESSION["email"]; ?>" title="enter your email if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <!-- <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any."> -->
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="<?php echo $_SESSION["phone"]; ?>" title="enter your phone number if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email"><h4>Description</h4></label>
                                <!-- <textarea class="form-control" id="Description" placeholder="enter description" title="enter description" style="resize:none" rows="2"></textarea> -->
                                <textarea class="form-control" id="Description" placeholder="<?php echo $_SESSION["description"]; ?>" title="enter description" style="resize:none" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                             <div class="col-xs-12">
                                  <br>
                                	<button class="btn postbtn btn btn-lg profilebtnv" type="submit"><i class="fas fa-check"></i> </button>
                                 	<button class="btn postbtn btn btn-lg profilebtnx" type="reset"><i class="fas fa-times" style=" margin-left:4px; margin-right:4px;"></i></button>
                              </div>
                        </div>
                	</form>

                <hr>

               </div><!--/tab-pane-->

            </div><!--/tab-content-->

          </div><!--/col-9-->
      </div><!--/row-->


  <script>
  $(document).ready(function() {


    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }


    $(".file-upload").on('change', function(){
        readURL(this);
    });
  });
  </script>
  <script type="text/javascript" src="js/login_signup.js"></script>
  <script type="text/javascript" src="js/all-post.js"></script>
  <script type="text/javascript" src="js/scrollbar.js"></script>
</body>
</html>
