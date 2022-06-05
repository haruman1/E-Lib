<?php
include_once '../template/auth/headlogin.php';

echo $file_penting->render_with_type();

if (empty($_SESSION['username'] and $_SESSION['password'])) {

?>
	<form class="login_form" method="POST" action="proses/loginact.php" name="form_login" onsubmit="return(validated());">
		<input autocomplete="off" type="text" placeholder="Username Anda" name="username" />
		<div id="username_error">Please fill up your Username </div>
		<input type="password" placeholder="Password anda" name="password" />
		<div id="pass_error">Please fill up your Password</div>
		<button type="submit" name="submit" value="login">
			Login
		</button>
		<p class="regis">
			Not Registered?
			<a href="register.php" style="color: blue">create an account</a>
		</p>
		<p class="forgot">
			Forgot your password?
			<a href="forgotpass.php" style="color: blue">Reset it now </a>
		</p>
	</form>
<?php include_once '../template/footer/footer.php';
} else {
	$file_penting->redirect('../admin/', true);
} ?>