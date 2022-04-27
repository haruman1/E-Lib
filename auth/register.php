<?php include '../template/head/headregister.php'; ?>

<form class="regis_form" method="POST" action="../inc/daftar.php">
    <input type="email" placeholder="Email anda" name="email">
    <input type="text" placeholder="Nama anda" name="nama">
    <input type="username" placeholder="Masukkan username" name="username">
    <input type="password" placeholder="Masukkan password" name="password">

    <button type="submit" type="button" name="submit">Daftar</button>
    <p class="login">Do you have account? <a href="login.html" style="color: blue;">Login</a></p>
    <!-- <p class="forgot">Forgot your password? <a href="$" style="color: blue;">Reset it now </a>  -->
    </p>
</form>

<?php include '../template/footer/footregister.php'; ?>
