<?php
namespace account\view;
class AccountView {
	public function __contruct() {

	}

	public function loginButtonView($username, $btnLocation) {
		if ($username != null){
			if ($btnLocation == "first"){
				echo '
				<a class="nav-link" href=""><span class="span-btn">'.$username.'</span></a>
				';
			}
			else if ($btnLocation == "second"){
				echo '
				<a class="nav-link" href="./index.php?logout"><span class="span-btn">Logout</span></a>
				';
			}
		}
		else {
			if ($btnLocation == "first"){
				echo '
				<a class="nav-link" href="#loginModal" data-toggle="modal"><span class="span-btn">Login</span></a>
				';
			}
			else if ($btnLocation == "second"){
				echo '
				<a class="nav-link" href="" data-toggle="modal"><span class="span-btn">Sign up</span></a>
				';
			}
		}
	}

	public function loginForm() {
		echo '
		<div id="loginModal" class="modal fade">
			<div class="modal-dialog modal-login">
				<div class="modal-content">
					<form id="login-form" method="post" action="">
						<input type="hidden" name="loginSubmitted" value="1"/>
						<div class="modal-header">
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username</label>
								<span class="error-message" id="login_error"></span>
								<input type="text" class="form-control" required="required" id="username2" name="username">
							</div>
							<div class="form-group">
								<div class="clearfix">
									<label>Password</label>
									<a href="#" class="pull-right"><small>Forgot?</small></a>
								</div>
								<input type="password" class="form-control" required="required" id="password2" name="password">
							</div>
							<div class="form-group" style="margin-bottom: -10px;">
								<label class="checkbox-inline" style="word-wrap: break-word; cursor: pointer;">
									<input type="checkbox" style="margin-top: auto; margin-bottom: auto;"> Remember me
								</label>
							</div>
						</div>
						<div class="modal-footer justify-content-between">
							<a href="#signupModal" data-toggle="modal" data-dismiss="modal">Not having an account yet?</a>
							<input type="submit" class="btn btn-primary float-right" value="Login" onclick="checkLogin()">
						</div>
					</form>
				</div>
			</div>
		</div>
		';
 	}
}
