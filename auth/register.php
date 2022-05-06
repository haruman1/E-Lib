<?php

include_once '../template/head/headregister.php';
require_once '../inc/includepenting.php';
echo $file_penting->render('message');
?>

<form class="regis_form" method="POST" action="./proses/daftar.php">
    <input type="email" placeholder="Email anda" name="email">
    <input type="text" placeholder="Nama anda" name="nama">
    <input type="username" placeholder="Masukkan username" name="username">
    <input type="password" placeholder="Masukkan password" name="password">

    <button type="submit" type="button" name="register" value="register">Daftar</button>
<<<<<<< HEAD
    <p class="login">Do you have account? <a href="login.php" style="color: blue;">Login</a></p>
=======
    <p class="login">Do you have account? <a href="login.html" style="color: blue;">Login</a></p>
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
    <!-- <p class="forgot">Forgot your password? <a href="$" style="color: blue;">Reset it now </a>  -->
    </p>
</form>

<<<<<<< HEAD
<?php include_once '../template/footer/footregister.php'; ?>
=======
<?php include_once '../template/footer/footregister.php'; ?>
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
