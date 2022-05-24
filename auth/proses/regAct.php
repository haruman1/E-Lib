<?php

if (!empty($_POST['register'])) {
    require_once __DIR__ . '/../functions/penting.php';
    $daftar = new FilePenting();
    $daftar_email = htmlspecialchars(strip_tags($_POST['email']));
    $daftar_username = htmlspecialchars($_POST['username']);
    $query_UsernameEmail = mysqli_query($con, "SELECT email,username FROM user WHERE username = '$daftar_username' OR email = '$daftar_email'");
    $fetchDataUserEmail = mysqli_fetch_array($query_UsernameEmail);
    if ($fetchDataUserEmail['email'] == $daftar_email) {
        $daftar->add_with_type('Email Sudah pernah Digunakan,Silahkan Login', 'danger', '../register.php');
    } elseif ($fetchDataUserEmail['username'] == $daftar_username) {
        $daftar->add_with_type('Username Sudah pernah Digunakan Silahkan Login', 'danger', '../register.php');
    } else {
        $daftar_password = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 50]);
        $daftar_nama = htmlspecialchars($_POST['nama']);
        $daftar_tgl = time();
        $is_active = 0;
        $daftar_role = 2; //otomatis menjadi user dulu
        $token = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $insertToToken = mysqli_query($con, "INSERT INTO user_token (id,email,token,date_created) VALUES ('','$daftar_email','$token','$daftar_tgl')");
        if ($insertToToken) {
            $insertToUser = mysqli_query($con, "INSERT INTO user (id_user,nama,username,email,password,role,is_active,date_created) VALUES ('','$daftar_nama','$daftar_username','$daftar_email','$daftar_password','$daftar_role','$is_active','$daftar_role') ");
            $data_Array = array(
                'email' => $daftar_email,
                'token' => $token
            );
            $daftar->curl_post_contents($_ENV['WEB_LINK'] . 'mail/sendverif.php', json_encode($data_Array));
            if ($insertToUser) {
                $daftar->kirim_email($daftar_email, $con);
            } else {
                $delete_user_token = mysqli_query($con, "DELETE FROM user_token WHERE email = '$daftar_email'");
                $delete_user = mysqli_query($con, "DELETE FROM user WHERE email = '$daftar_email'");
                $daftar->add_with_type('Pendaftaran Gagal, Silahkan coba Daftar Lagi 1', 'danger', '/../../auth/register.php');
            }
        } else {
            $daftar->add_with_type('Pendaftaran Gagal, Silahkan Coba Daftar Lagi 2', 'danger', '/../../auth/register.php');
        }
    }
} else {
    $daftar->redirect('../auth/register.php');
}
