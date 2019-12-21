<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    session_start();
    include("header.php");
  ?>
  <title>Create New Post</title>
  <style>
  .container2 {
    margin-top: 70px;
  }
  .postbtn {
    font-family: MdGroteskRegular;
    background-color: #ffffff;
    color: black;
    text-transform: uppercase;
    text-decoration: none;
    padding:6px;
    border: 1px solid #b89a98 !important;
    margin-top: 12px;
  }
  .profilebtnv{
    color:#24c982;
    margin-top:-30px;
  }
  .profilebtnx{
    color:#fc0303;
    margin-top:-30px;
  }
  .profilebtnp{
    color:#24c982;
    margin-top:-40px;
    float:right;
  }
  .profilebtnx{
    color:#fc0303;
    margin-top:-30px;
  }
  .profilebtnphoto{
    color:#63625e;
    margin-top:-30px;
  }
  .postbtn:hover{
    background-color: #d9d9d9;
    color:#ffffff;
  }

  </style>
</head>
<body>
  <!-- navbar -->
  <?php include("navbar.php"); ?>
  <!-- navbar -->

    <div class="container2">
    <hr>
    <div class="container bootstrap snippet">
        <div class="row">
        	<div class="col-sm-12">

            <div class="tab-content">
              <div class="tab-pane active" id="home">
                    <form class="form" action="#" method="post" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name"><h4>Title</h4></label>
                                <input type="text" class="form-control" name="full_name" id="full_name" placeholder="type your title" title="enter your full name if any.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <div class="input-group mb-3">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="type city" title="enter your phone number if any.">
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="type country" title="enter your phone number if any.">
                              <select class="custom-select" id="inputGroupSelect02">
                                <option selected>select continent</option>
                                <option value="1">Africa</option>
                                <option value="2">America</option>
                                <option value="3">Asia</option>
                                <option value="4">Europe</option>
                                <option value="5">Oceania</option>
                                <option value="6">North Pole</option>
                              </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6">
                                <label for="email"><h4>Content</h4></label>
                                <textarea class="form-control" id="Description" placeholder="type your post content" title="enter description" style="resize:none" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                             <div class="col-xs-12">
                                  <br>
                                	<button class="btn postbtn btn btn-lg profilebtnphoto" type="submit"><i class="fas fa-images"></i> Media</button>
                                 	<button class="btn postbtn btn btn-lg profilebtnphoto" type="reset"><i class="fas fa-user"></i> Tag Friends</button>
                                  <button class="btn postbtn btn btn-lg profilebtnphoto" type="reset"><i class="far fa-grin-squint"></i> Feeling</button>
                              </div>
                        </div>
                        <div class="form-group">
                             <div class="col-xs-12">
                                  <br>
                                	<button class="btn postbtn btn btn-lg profilebtnp" type="post"><i class="fas fa-blog"></i> Post </button>
                                  </div>

                        </div>
                	</form>

                <hr>

               </div><!--/tab-pane-->

            </div><!--/tab-content-->

          </div><!--/col-9-->
      </div><!--/row-->




  <script type="text/javascript" src="js/login_signup.js"></script>
  <script type="text/javascript" src="js/all-post.js"></script>
  <script type="text/javascript" src="js/scrollbar.js"></script>
</body>
</html>
