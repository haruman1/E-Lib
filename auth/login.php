<?php
include_once '../template/head/headlogin.php';
require_once '../inc/includepenting.php';
echo $file_penting->render_with_type();
?>
<form class="login_form" method="POST" action="./proses/loginact.php">
    <input type="text" placeholder="Username Anda" name="username" />
    <input type="password" placeholder="Password anda" name="password" />
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
<?php include_once '../template/footer/footregister.php'; ?>