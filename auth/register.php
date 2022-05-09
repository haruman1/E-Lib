<?php

include_once '../template/head/headregister.php';
require_once '../inc/includepenting.php';
echo $file_penting->render('message');
?>

<form class="regis_form" method="POST" action="./proses/regAct.php">
    <input type="email" placeholder="Email anda" name="email">
    <input type="text" placeholder="Nama anda" name="nama">
    <input type="username" placeholder="Masukkan username" name="username">
    <input type="password" placeholder="Masukkan password" name="password">

    <button type="submit" type="button" name="register" value="register">Daftar</button>
    <p class="login">Do you have account? <a href="login.php" style="color: blue;">Login</a></p>
    <!-- <p class="forgot">Forgot your password? <a href="$" style="color: blue;">Reset it now </a>  -->
    </p>
</form>

<?php include_once '../template/footer/footer.php'; ?>