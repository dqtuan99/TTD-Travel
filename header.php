<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
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

<?php
  require_once("account/control/AccountCtrl.php");
  $accountCtrl = new \account\control\AccountCtrl();
  $accountCtrl->checkAuthentication();
  $accountCtrl->checkSignUp();
?>
