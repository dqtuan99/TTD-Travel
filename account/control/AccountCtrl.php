<?php
namespace account\control;

require_once("account/view/AccountView.php");
require_once("account/model/Account.php");
require_once("post/control/PostCtrl.php");

class AccountCtrl {
	public function __contruct() {

	}

  public function checkSignUp() {
    $usernameExisted = false;
    $emailExisted = false;
		$message = "";
		if (isset($_POST["signupSubmitted"])){
			$account = new \account\model\Account();
			// if ($account->checkExistUsername($_POST["username"])) {
			// 	$this->doSignUp();
			// }
			// else {
			// 	$message = "Failed to create account: Username already exists";
			// 	echo "
			// 	<script type='text/javascript'>
			// 		alert('$message');
			// 	</script>";
			// 	header("refresh:1; url=index.php" ); //1 second
			// }
			if (!$account->checkExistUsername($_POST["username"])) $usernameExisted = true;
			if (!$account->checkExistEmail($_POST["email"])) $emailExisted = true;
			if (!$usernameExisted && !$emailExisted){
				$this->doSignUp();
			}
			else {
				$message = "Failed to create account: ";
				if ($usernameExisted){
					$message .= "Username";
					if ($emailExisted){
						$message .= " and email";
					}
				}
				else {
					if ($emailExisted){
						$message .= "Email";
					}
				}
				$message .= " already existed.";

				echo "
				<script type='text/javascript'>
					alert('$message');
				</script>";
				header("refresh:1; url=index.php" ); //1 second
			}
		}
  }


  public function doSignUp() {
		$account = new \account\model\Account();
		$username = $_POST["username"];
		$password = $_POST["password"];
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];

		if ($account->createAccount($username, $password, $fullname, $email)){
			session_start();
      $this->doLogin();
			header("Location: index.php");
		}
  }

	public function showLoginBtn($btnLocation) {
		$accountview = new \account\view\AccountView();
		$username = "";
		if (isset($_SESSION["username"])){
			$username = $_SESSION["fullname"];
		}
		$accountview->loginButtonView($username, $btnLocation);
	}

	public function checkAuthentication() {
		session_start();
		if (!isset($_SESSION["username"])) {
			if (isset($_POST["loginSubmitted"])) $this->doLogin();
			else $this->login();
		}

		if (isset($_GET["logout"])){
			$this->doLogout();
		}
	}

	public function login() {
		$accountview = new \account\view\AccountView();
		$accountview->loginForm();
		// exit("<br />Please login");
	}

	public function doLogin() {
		if (isset($_SESSION["username"])) return; /*da dang nhap roi*/
		if (isset($_POST["username"]) && isset($_POST["password"])){
			$account = new \account\model\Account();
			if ($account->checkAccount($_POST["username"], $_POST["password"])){
				$_SESSION["username"] = $_POST["username"];
        $infor = $account->getAccountInfomation($_SESSION["username"]);
				$_SESSION["fullname"] = $infor["fullname"];
				$_SESSION["email"] = $infor["email"];
				$_SESSION["avatarPath"] = $infor["avatarPath"];
				$_SESSION["description"] = $infor["description"];
				$_SESSION["isAdmin"] = $infor["isAdmin"];
			}
			else {
				$message = "Failed to login: Username or password not found.";
				echo "
				<script type='text/javascript'>
					alert('$message');
				</script>";
				$this->login();
			}
		}
		else {
			$message = "Failed to login: Username and password can not be blank.";
			echo "
			<script type='text/javascript'>
				alert('$message');
			</script>";
			$this->login();
		}
	}

	public function doLogout() {
		// session_destroy();
		// session_start();
		unset($_SESSION["username"]);
		header("Location: index.php");
		$this->login();
	}
}
