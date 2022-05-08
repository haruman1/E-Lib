<?php
include_once '../template/head/headlogin.php';
require_once '../inc/includepenting.php';
echo $file_penting->render_with_type();
?>
<form class="login_form" method="POST" action="./proses/loginact.php" name="form_login" onsubmit="return(validated());" >
    <input autocomplete="off" type="text" placeholder="Username Anda" name="username"/>
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
<?php include_once '../template/footer/footregister.php';?>
<script type= "text/javascript">
let username = document.form_login.username;
let password = document.form_login.password;

let username_error = document.getElementById('email_error');
let pass_error = document.getElementById('pass_error');

username.addEventListener('textInput', username_Verify);
password.addEventListener('textInput', pass_Verify);

function validated(){
	if (username.value.length < 4) {
		username.style.border = "1px solid red";
		username.style.display = "block";
		username.focus();
		return false;
	}
	if (password.value.length < 4) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}

}
function username_Verify(){
	if (username.value.length >= 3) {
		username.style.border = "1px solid silver";
		username_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	if (password.value.length >= 3) {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}


</script>
