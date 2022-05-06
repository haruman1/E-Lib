<?php
require '../inc/kon.php';
$mail = htmlspecialchars(strip_tags($_GET['email']));
$token = htmlspecialchars(strip_tags($_GET['token']));
<<<<<<< HEAD
$sudah_verif = new FilePenting();
=======

>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
$check_semua = mysqli_query(
  $con,
  'SELECT user.email, user_token.token, user_token.date_created from user inner join user_token on user.email= user_token.email WHERE user.email = "' .
    $mail .
    '" AND user_token.token = "' .
    $token .
    '"'
);
$fetch = mysqli_fetch_array($check_semua);
if ($fetch != 0) {
<<<<<<< HEAD
  if (time() - $fetch['date_created'] < (60 * 60 * 24)) {
=======
  if (time() - $fetch['date_created'] < 60 * 60 * 24) {
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
    $update_user = mysqli_query(
      $con,
      'UPDATE user SET is_active = 1 WHERE email = "' . $mail . '"'
    );
    if (!empty($update_user)) {
<<<<<<< HEAD
      $sudah_verif->add_with_type(
        'Akun anda telah diaktifkan, Silahkan Login!',
        'success',
        '../../login.php'
      );
    } else {
      $sudah_verif->add_with_type(
        'Akun anda gagal diaktifkan karena token sudah mati, Silahkan coba lagi!',
        'danger',
        '../../login.php'
      );
=======
      FilePenting::add_with_type(
        'Akun anda telah diaktifkan, Silahkan Login!',
        'success'
      );
      echo '<script>window.location.href="../../login.php"</script>';
    } else {
      FilePenting::add_with_type(
        'Akun anda gagal diaktifkan, Silahkan coba lagi!',
        'danger'
      );
      echo '<script>window.location.href="../../login.php"</script>';
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
    }
  }
}
