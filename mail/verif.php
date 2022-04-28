<?php
require '../inc/kon.php';
$mail = htmlspecialchars(strip_tags($_GET['email']));
$token = htmlspecialchars(strip_tags($_GET['token']));

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
  if (time() - $fetch['date_created'] < 60 * 60 * 24) {
    $update_user = mysqli_query(
      $con,
      'UPDATE user SET is_active = 1 WHERE email = "' . $mail . '"'
    );
    if (!empty($update_user)) {
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
    }
  }
}
