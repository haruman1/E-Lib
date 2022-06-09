<?php
require_once __DIR__ . '/../template/auth/header.php';

$regis_username_msg = "";
$regis_nama_msg = "";
$regis_email_msg = "";
$regis_pwd_msg = "";
$regis_confirm_pwd_msg = "";
$regis_username_valid = false;
$regis_email_valid = false;
$regis_pwd_valid = false;
$regis_confirm_pwd_valid = false;
$regex_password = "#.*^(?=.{8,12})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#";
$regex_name = "/^([a-zA-Z'\- ]+)$/";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nama_anda"])) {
        $regis_username_msg = "Nama is required";
    } else if (!preg_match($regex_name, $_POST["nama_anda"])) {
        $regis_username_msg = "Nama must be letters, spaces, or dashes only";
    } else {
        $regis_username_valid = true;
    }
    if (empty($_POST["regist_email"])) {
        $regis_email_msg = "Email is required";
    } else if (!filter_var($_POST["regist_email"], FILTER_VALIDATE_EMAIL)) {
        $regis_email_msg = "Email is invalid";
    } else {
        $regis_email_valid = true;
    }
    if (empty($_POST["password"])) {
        $regis_pwd_msg = "Password is required";
    } else if (!preg_match($regex_password, $_POST["password"])) {
        $regis_pwd_msg = "Password must be 8-12 characters and must contain at least one lowercase letter, one uppercase letter, and one numeric digit";
    } else {
        $regis_pwd_valid = true;
    }
    if (empty($_POST["confirm-password"])) {
        $regis_confirm_pwd_msg = "Confirm Password is required";
    } else if ($_POST["password"] != $_POST["confirm-password"]) {
        $regis_confirm_pwd_msg = "Confirm Password must match Password";
    } else {
        $regis_confirm_pwd_valid = true;
    }
    if ($regis_username_valid == true && $regis_email_valid == true && $regis_pwd_valid == true && $regis_confirm_pwd_valid == true) {
        include "proses/register_now.php";
    }
}
?>

<form class="row g-3 needs-validation" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
    <label>Email Anda</label>
    <div class="mb-3">
        <input type="email" class="form-control" placeholder="Email Anda" aria-label="Email" aria-describedby="email-addon" name="regist_email">
        <small class="text-danger pl-3">
            <?php echo $regis_email_msg ?>
        </small>
    </div>
    <label>Nama anda</label>
    <div class="mb-3">
        <input type="text" class="form-control" placeholder="Nama Anda" aria-label="Nama" aria-describedby="nama-addon" name="nama_anda">
        <small class="text-danger pl-3">
            <?php echo $regis_nama_msg ?>
        </small>
    </div>
    <label>Username</label>
    <div class="mb-3">
        <input type="username" class="form-control" placeholder="Username Anda" aria-label="Username" aria-describedby="username-addon" name="username">
        <small class="text-danger pl-3">
            <?php echo $regis_username_msg ?>
        </small>
    </div>

    <label>Password</label>
    <div class="mb-3">
        <input type="password" class="form-control" placeholder="Masukkan Password Anda" aria-label="Password" aria-describedby="password1-addon" name="password">
        <small class="text-danger pl-3">
            <?php echo $regis_pwd_msg ?>
        </small>
    </div>
    <label>Konfirmasi Password</label>
    <div class="mb-3">
        <input type="password" class="form-control" placeholder="Masukkan Kembali Password Anda" aria-label="Password" aria-describedby="password2-addon" name="confirm-password">
        <small class="text-danger pl-3">
            <?php echo $regis_confirm_pwd_msg ?>
        </small>
    </div>

    <div class="text-center">
        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0" name="submit">Register</button>
    </div>
</form>
</div>
<div class="card-footer text-center pt-0 px-lg-2 px-1">
    <p class="mb-4 text-sm mx-auto">
        Sudah punya akun? Silahkan Login
        <a href=" <?php echo $_ENV['LINK_WEB']  ?>auth/login.php" class="text-info text-gradient font-weight-bold">Sign In</a>
    </p>
</div>
</div>
</div>
<?php

require_once __DIR__ . '/../template/auth/footer.php'; ?>
<script>
    $(document).ready(function() {
        $("title").html("<?php echo $_ENV['NAMA_WEB'] ?> - Register Account");
        $("a.navbar-brand").html(" <?php echo $_ENV['NAMA_WEB'] ?> - Register Account");
        $("p.nama_web").html("Silahkan mendaftar akun anda");
    })
</script>