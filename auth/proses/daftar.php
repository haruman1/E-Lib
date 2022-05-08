<?php

use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/../../vendor/autoload.php';
require_once '../../inc/includepenting.php';
require_once '../../inc/kon.php';
require '../../inc/env.php';
$email_user = htmlspecialchars(strip_tags($_POST['email']));
$username = htmlspecialchars($_POST['username']);
$cek_user = mysqli_fetch_assoc(mysqli_query($con, "SELECT email,username FROM user WHERE email = '$email_user' OR username = '$username'"));
if ($cek_user['email'] == $email_user || $cek_user['username'] == $username) {
  FilePenting::add_with_type('Username atau email sudah digunakan', 'danger', '../login.php');
} else {
  if (empty($_POST['register'])) {
    FilePenting::add_with_type('Gagal mendaftar, silahkan coba lagi ', 'danger', '../register.php');
  } else {

    if (!empty($_POST['register'] == 'register')) {
      $nama = htmlspecialchars($_POST['nama'], ENT_DISALLOWED);

      $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      $is_active = 0;
      $role = 2;
      $token = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
      $date_created = date('Y-m-d');

      $insert_user = mysqli_query(
        $con,
        "INSERT INTO user (id_user,nama,username,email,password,role,is_active,date_created) VALUES ('','$nama','$username','$email_user','$password','$role','$is_active','$date_created')"
      );
      $data_body = [
        'nama' => $nama,
        'email' => $email_user,
        'username' => $username,
        'password' => $password,
        'is_active' => $is_active,
        'role' => $role,
        'token' => $token,
        'date_created' => $date_created,
      ];
      $json = json_encode($data_body);
      $kirim = file_put_contents('../../json/data_daftar.json', $json);
      if (!empty($insert_user)) {
        FilePenting::add(
          '<div class="alert alert-success" role="alert">
          Terimakasih,Tolong Aktivasi Akun anda! </br> Jangan Lupa Check Folder Spam!</div>'
        );
        $messageBody = FilePenting::curl_get_contents(
          $_ENV['WEB_LINK'] . 'utsPemWeb/mail/sendverif.php'
        );
        FilePenting::kirim_email($email_user, $messageBody, $token);
        echo '<script>window.location.href="../register.php"</script>';
      } else {
        FilePenting::add('<div class="alert alert-danger" role="alert">
        Maaf, data anda ada yang salah</div>');
        echo '<script>window.location.href="../register.php"</script>';
      }
    } else {
      FilePenting::add_with_type(
        'Gagal mendaftar, Data ada yang kurang',
        'danger',
        '../register.php
      '
      );
    }
  }
}
