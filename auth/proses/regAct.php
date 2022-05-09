<?php

if (!empty($_POST['register'])) {
    require_once '../../inc/includepenting.php';
    require_once '../../inc/kon.php';
    require_once '../../inc/env.php';
    $daftar = new FilePenting();
    $daftar_email = htmlspecialchars(strip_tags($_POST['email']));
    $daftar_username = htmlspecialchars($_POST['username']);
    $query_UsernameEmail = mysqli_query($con, "SELECT email,username FROM user WHERE username = '$daftar_username' OR email = '$daftar_email'");
    $fetchDataUserEmail = mysqli_fetch_array($query_UsernameEmail);
    if ($fetchDataUserEmail['email'] == $daftar_email) {
        $daftar->add_with_type('Email Sudah pernah Digunakan,Silahkan Login', 'danger', '/register.php');
    } elseif ($fetchDataUserEmail['username'] == $daftar_username) {
        $daftar->add_with_type('Username Sudah pernah Digunakan Silahkan Login', 'danger', '/register.php');
    } else {
        $daftar_password = htmlspecialchars($_POST['password']);
        $daftar_nama = htmlspecialchars($_POST['nama']);
        $daftar_tgl = date('Y-m-d');
        $is_active = 0;
        $daftar_role = 1; //otomatis menjadi user dulu
        $token = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $insertToToken = mysqli_query($con, "INSERT INTO user_token (id,email,token,date_created) VALUES ('','$daftar_email','$token','$daftar_tgl')");
        if ($insertToToken) {
            $daftar->add_with_type('Pendaftaran Berhasil, Silahkan check email untuk verifikasi', 'success', './../auth/login.php');
            $insertToUser = mysqli_query($con, "INSERT INTO user (id_user,nama,username,email,password,role,is_active,date_created) VALUES ('','$daftar_nama','$daftar_username','$daftar_email','$daftar_password','$daftar_role','$is_active','$daftar_role') ");
            while ($insertToUser) {
                $daftar->kirim_email($daftar_email, 'Terimakasih Telah mendaftar ke kami,silahkan check verifikasi nya melalui = ' . $_ENV['WEB_LINK'] . 'e-lib/mail/verif.php?email=' . $daftar_email . '&token=' . $token . '', $token);
            }
        } else {
            $daftar->add_with_type('Pendaftaran Gagal, Silahkan Coba Lagi', 'danger', './../auth/register.php');
        }
    }
} else {
    header('Location: ./../auth/register.php');
}
