<?php
include_once '../../inc/kon.php';
include_once '../../inc/includepenting.php';
$verify = new FilePenting();
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$submit = htmlspecialchars($_POST['submit']);
$check_active = mysqli_fetch_assoc(mysqli_query($con, "SELECT username,is_active FROM user WHERE username='$username'"));
if ($check_active['is_active'] == 1) {
    if (password_verify($password, $check_active['password'])) {
        session_start();
        $_SESSION['username'] = $check_active['username'];
        $_SESSION['password'] = $$check_active['password'];
        if ($check_active['role'] == 1) {
            $verify->redirect('../../admin/index.php', true);
        } else {
            $verify->redirect('../../user/index.php', true);
        }
    } else {
        $verify->add_with_type('Password salah', 'danger', '../login.php');
    }
} else {
    $verify->add_with_type('Username anda belum aktif,Silahkan Check Email', 'danger', '../login.php');
}
