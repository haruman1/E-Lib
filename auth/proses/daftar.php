<?php
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/../../vendor/autoload.php';
require_once '../../inc/includepenting.php';
require_once '../../inc/kon.php';
require '../../inc/env.php';

if (empty($_POST['register'])) {
  FilePenting::add_with_type('Gagal mendaftar, silahkan coba lagi ', 'danger');
} else {
  if (!empty($_POST['register'] == 'register')) {
    $nama = htmlspecialchars($_POST['nama'], ENT_DISALLOWED);
    $email_user = htmlspecialchars(strip_tags($_POST['email']));
    $username = htmlspecialchars($_POST['username']);
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
      'danger'
    );
  }
}
//   if (kirim_email($email_user, $nama, $token)) {
//     $insert_user = mysqli_query(
//       $con,
//       "INSERT INTO user (id_user,role,nama,username,email,password,is_active,date_created) VALUES ('','$role','$nama','$username','$email_user','$password','$is_active','$date_created')"
//     );
//     if (!empty($insert_user)) {
//       FilePenting::add_with_type(
//         'Berhasil mendaftar, silahkan cek email anda untuk verifikasi',
//         'success'
//       );
//       FilePenting::add_with_type(
//         'Gagal mendaftar, silahkan coba lagi 3',
//         'danger'
//       );
//       echo '<script>alert("alert yang 3")</script>';
//     } else {
//       FilePenting::add_with_type(
//         'Gagal mendaftar, silahkan coba lagi',
//         'danger'
//       );
//       FilePenting::add_with_type(
//         'Gagal mendaftar, silahkan coba lagi 4',
//         'danger'
//       );
//       echo '<script>alert("alert yang 4")</script>';
//     }
//   } else {
//     FilePenting::add_with_type(
//       'Gagal mendaftar, silahkan coba lagi',
//       'danger'
//     );
//   }
//   $insert_token = mysqli_query(
//     $con,
//     "INSERT INTO user_token (id,email,token,date_created) VALUES ('','$email_user','$token','$date_created')"
//   );
// } else {
//   FilePenting::add_with_type(
//     'Gagal mendaftar, silahkan coba lagi 5',
//     'danger'
//   );
//   echo '<script>alert("alert yang 5")</script>';
// }
//  if (!isset($buttonsubmit)) {
//    header('Location: ../index.php');
//  } else {
//    $query = mysqli_query(
//      $con,
//      "INSERT INTO user_token (id, email, token, date_created) VALUES ('','$email_user', '$token', '$date_created')"
//    );
//    if ($query == true) {
//      kirim_email($email_user, $token);
//      $insert_user = mysqli_query(
//        $con,
//        "INSERT INTO user (id_user, role,nama,  username, email, password, is_active, date_created) VALUES ('' ,'$role', '$nama', '$username', '$email_user', '$password', '$is_active', '$date_created')"
//      );
//    } else {
//      echo "alert('Gagal');";
//    }
//  }
//  if (kirim_email($email_user, $token) == true) {
//    $query = mysqli_query(
//      $con,
//      "INSERT INTO user_token VALUES('','$email_user','$token','$date_created')"
//    );

//    if ($query == true) {
//      $insert_user = mysqli_query(
//        $con,
//        "INSERT INTO user Values('','$role','$nama','$username','$email_user','$password','$is_active','$date_created')"
//      );

//      echo 'Berhasil';
//    } else {
//      echo "<script>alert('Data anda ada yang salah 1')</script>";
//    }
//  }
