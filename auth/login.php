<?php


require_once __DIR__ . '/../functions/Cookies.php';
require_once __DIR__ . '/../inc/koneksi.php';
$Cookie->cookie_out($con);
$login_pwd_msg = "";
$login_username_msg = "";
$login_username_valid = false;
$login_password_valid = false;
$regex_password = "#.*^(?=.{8,12})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $login_username_msg = "Username is required";
    } else {
        $login_username_valid = true;
    }
    if (empty($_POST["password"])) {
        $login_pwd_msg = "Password is required";
    } else {
        $login_password_valid = true;
    }
    if ($login_username_valid == true and $login_password_valid == true) {
        include_once   "proses/loginact.php";
    }
}
require_once __DIR__ . '/../template/auth/header.php';

?>

<form class="row g-3 needs-validation" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <label>username</label>
    <div class="mb-3">
        <input type="username" class="form-control" placeholder="Username Anda" aria-label="Username" aria-describedby="email-addon" name="username" value="<?php if (isset($_POST['email'])) {
                                                                                                                                                                echo $_POST['email'];
                                                                                                                                                            } ?>">
        <small class="text-danger pl-3"><?php echo $login_username_msg ?></small>


    </div>
    <label>Password</label>
    <div class="mb-3">
        <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password" value="<?php if (isset($_POST['password'])) {
                                                                                                                                                                echo $_POST['password'];
                                                                                                                                                            } ?>">
        <small class="text-danger pl-3"><?php echo $login_pwd_msg ?></small>

    </div>
    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" name="remember[]" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="submit">Sign in</button>
    </div>
</form>
</div>
<div class="card-footer text-center pt-0 px-lg-2 px-1">
    <p class="mb-4 text-sm mx-auto">
        Don't have an account?
        <a href=" <?php echo $_ENV['LINK_WEB']  ?>auth/register.php" class="text-info text-gradient font-weight-bold">Sign up</a>
    </p>
</div>
</div>
</div>
<?php

require_once __DIR__ . '/../template/auth/footer.php';
?>
<script>
    $(document).ready(function() {
        $("title").html("<?php echo $_ENV['NAMA_WEB'] ?> - Log In");
        $("a.navbar-brand").html(" <?php echo $_ENV['NAMA_WEB'] ?> - Log In");
        $("p.nama_web").html("Enter your username and password to Log In");

    })
</script>