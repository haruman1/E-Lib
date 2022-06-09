<?php
session_start();
require_once __DIR__ . '/../../functions/penting.php';
require_once __DIR__ . '/../../functions/Cookie.php';
$new_user = new FilePenting();
$Cookie->cookie_out($con);

$buat_UID = $new_user->generateId();

$username = htmlspecialchars($_POST['username']);
$email = htmlspecialchars(mysqli_real_escape_string($con, $_POST['regist_email']));

$nama = htmlspecialchars(mysqli_real_escape_string($con, $_POST['nama_anda']));
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$check_email = mysqli_num_rows(mysqli_query($con, "SELECT * FROM daftar_user where email = '$email'"));
if ($check_email > 0) {
    $new_user->add_with_type('MAAF, EMAIL SUDAH TERDAFTAR', 'danger', 'register.php');
} else {
    $insert_user = mysqli_query($con, "CALL CreateUser('$buat_UID','$nama','$username','$email','$password','1',time())");
    if ($insert_user) {
        $new_user->add_with_type('BERHASIL MENGIRIMKAN EMAIL VERIFIKASI', 'success', 'login.php');
    } else {
        $new_user->add_with_type('GAGAL MENGIRIMKAN EMAIL VERIFIKASI', 'danger', 'register.php');
    }
}
