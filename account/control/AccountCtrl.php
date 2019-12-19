<?php
namespace account\control;

require_once("account/view/AccountView.php");
require_once("account/model/Account.php");
require_once("post/control/PostCtrl.php");

class AccountCtrl {
	public function __contruct() {

	}

	public function showLoginBtn($btnLocation) {
		$accountview = new \account\view\AccountView();
		$username = "";
		if (isset($_SESSION["username"])){
			$username = $_SESSION["username"];
			$account = new \account\model\Account();
			$username = $account->getAccountFullname($username);
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
			}
			else {
				echo "Ten dang nhap hoac mat khau khong dung.";
				$this->login();
			}
		}
		else {
			echo "Chua nhap ten dang nhap hoac mat khau.";
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
