<?php
require_once '../inc/kon.php';
require_once '../inc/includepenting.php';

$sudah_verif = new FilePenting();
// $check_semua = mysqli_query(
//   $con,
//   'SELECT user.email, user_token.token, user_token.date_created from user inner join user_token on user.email= user_token.email WHERE user.email = "' .
//     $mail .
//     '" AND user_token.token = "' .
//     $token .
//     '"'
// );
// $fetch = mysqli_fetch_array($check_semua);
// if (time() - $fetch['user_token.date_created'] < (60 * 60 * 24)) {
//   $updateActive = mysqli_query($con, "UPDATE user SET is_active = 1 WHERE email = '" . $mail . "'");
//   $deleteActive = mysqli_query($con, "DELETE FROM user_token WHERE email = '" . $mail . "'");
//   $sudah_verif->add_with_type('Selamat, Akun anda telah aktif, silahkan login', 'success', '../auth/login.php');
// } else {
//   $deleteMasaToken =  mysqli_query($con, "DELETE FROM user_token WHERE email = '" . $mail . "'");
//   $deleteMasaEmail = mysqli_query($con, "DELETE FROM user WHERE email = '" . $mail . "'");
//   $sudah_verif->add_with_type('Maaf, Email sudah kadaluarsa, silahkan Daftar Kembali', 'danger', '../auth/login.php');
// }
// include_once '../template/head/headlogin.php';
// require_once '../inc/includepenting.php';
// require_once '../inc/kon.php';
// $verify_data = new FilePenting();
// if (!empty($_POST['submit'])) {
//   $mail = htmlspecialchars($_POST['email_user']);
//   $token = htmlspecialchars($_POST['verif_code']);
//   $fetch = mysqli_fetch_array(mysqli_query($con, "SELECT date_created FROM user_token WHERE email = " . $mail . " AND token = " . $token . ""));
//   if (time() - $fetch['date_created'] < (60 * 60 * 24)) {
//     $check_token = mysqli_query($con, "UPDATE user,user_token SET user.is_active = 1,user.date_created = NOW() WHERE user.email = " . $mail . " AND user_token.email = " . $mail . " AND user_token.token = " . $token . "");
//     if ($check_token) {
//       $delete_token = mysqli_query($con, "DELETE FROM user_token WHERE email = " . $mail . " AND token = " . $token . "");
//     } else {
//       $verify_data->add_with_type('Maaf, Email sudah kadaluarsa, silahkan Daftar Kembali', 'danger', '../auth/login.php');
//     }
//   } else {
//     $verify_data->add_with_type("Maaf,jangan Usil yah", "danger", "../auth/register.php");
//   }
//   if (mysqli_affected_rows($con) == 0) {
//     $verify_data->add_with_type('Maaf, Email sudah kadaluarsa, silahkan Daftar Kembali', 'danger', '../auth/login.php');
//   } else {
//     $verify_data->add_with_type('Selamat, Akun anda telah aktif, silahkan login', 'success', '../auth/login.php');
//   }
// }
$email_user = htmlspecialchars($_GET['email']);
$token = htmlspecialchars($_GET['token']);
$check_user = mysqli_fetch_all(mysqli_query($con, "SELECT email FROM user WHERE email = '" . $email_user . "'"));
if (count($check_user) > 0) {
  $check_token = mysqli_fetch_all(mysqli_query($con, "SELECT * FROM user_token WHERE email = '" . $email_user . "' AND token = '" . $token . "'"));
  if (time() - $check_token[0]['date_created'] < (60 * 60 * 24)) {
    $update_active = mysqli_query($con, "UPDATE user SET is_active = 1 WHERE email = '" . $email_user . "'");
    $delete_token = mysqli_query($con, "DELETE FROM user_token WHERE email = '" . $email_user . "' AND token = '" . $token . "'");
    $sudah_verif->add_with_type('Selamat, Akun anda telah aktif, silahkan login', 'success', '../auth/login.php');
  } else {
    $delete_token = mysqli_query($con, "DELETE FROM user_token WHERE email = '" . $email_user . "' AND token = '" . $token . "'");
    $delete_user = mysqli_query($con, "DELETE FROM user WHERE email = '" . $email_user . "'");
    $sudah_verif->add_with_type('Maaf, Token sudah kadaluarsa, silahkan Daftar Kembali', 'danger', '../auth/login.php');
  }
} else {
  $sudah_verif->add_with_type('Maaf, Email sudah kadaluarsa, silahkan Daftar Kembali', 'danger', '../auth/login.php');
}


?>
<!-- <form class="login_form" method="POST" name="form_login">
  <input autocomplete="off" type="hidden" value="" name="email_user" />
  <input type="text" placeholder="Masukkan Code Token Anda" name="verif_code" />
  <button type="submit" name="submit" value="login">
    Login
  </button>
  <p class="regis">
    Not Registered?
    <a href="../auth/register.php" style="color: blue">create an account</a>
  </p>
  <p class="forgot">
    Forgot your password?
    <a href="../auth/forgotpass.php" style="color: blue">Reset it now </a>
  </p>
</form> -->