<?php
require_once __DIR__ . '/../../functions/penting.php';
$penting = new FilePenting();
$cookie = new CookieDoang();
$cookie->cookie_out($con);
if (!empty($_POST['username'] && $_POST['password'])) {
    if (isset($_POST['remember'])) {
        setcookie('email', $_POST['login-email'], time() + 86400);
        setcookie('password', password_hash($_POST['password'], PASSWORD_DEFAULT), time() + 86400);
    }
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $query_LOGIN = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");
    $log_row = mysqli_num_rows($query_LOGIN);
    $fetch_data = mysqli_fetch_array($query_LOGIN);
    if (password_verify($password, $fetch_data['password'])) {
        $cookie->cookie_in($con, $fetch_data['id']);
        if ($log_row > 0) {
            $_SESSION['mulai_login'] =  time();
            $_SESSION['username'] = $fetch_data['username'];
            $_SESSION['email'] = $fetch_data['email'];
            $_SESSION['nama'] = $fetch_data['nama'];
            $_SESSION['role'] = $fetch_data['role'];
            $_SESSION['login_time'] = $_SESSION['mulai_login'] + (30 * 60);
            if ($_SESSION['role'] == 1) {
                $penting->redirect('../admin/index.php', true);
            } else {
                $penting->redirect('../user/index.php', true);
                $_SESSION['expired_time'] = time() + (1 * 60);
            }
        } else {
            $penting->add_with_type('danger', 'Username atau Password Salah', 'login1.php');
            $_SESSION['expired_time'] = time() + (1 * 60);
        }
    } else {
        $penting->add_with_type('danger', 'Username atau Password Salah', 'login2.php');
    }
} else {
    $login_username_msg = "error 2";
    $penting->redirect('adad.php', true);
}

// session_start();
// require_once __DIR__ . '/../../functions/penting.php';
// require_once __DIR__ . '/../../functions/Cookies.php';
// $penting = new FilePenting();
// $Cookie->cookie_out($con);
// $username = htmlspecialchars($_POST['username']);
// $password = htmlspecialchars($_POST['password']);
// if (!isset($username) || !isset($password)) {
//     echo '<script>alert("Username 1 atau Password tidak boleh kosong");</script>';
//     $penting->redirect($_ENV['LINKWEB'] . 'auth/login.php', true);
// } else {
//     if (isset($_POST['remember'])) {
//         echo '<script>alert("Username 2 atau Password tidak boleh kosong");</script>';
//         setcookie('username', $username, time() + (86400 * 30), "/");
//         setcookie('password', $password, time() + (86400 * 30), "/");
//     }
//     $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
//     $fetch_data = mysqli_fetch_array($query);
//     if (password_verify($password, $fetch_data['password'])) {
//         $login_row = mysqli_num_rows($query);
//         if ($login_row > 0) {

//             echo '<script>alert("Username 3 atau Password tidak boleh kosong");</script>';
//             $_SESSION['mulai_login'] =  time();
//             $_SESSION['username'] = $fetch_data['username'];
//             $_SESSION['email'] = $fetch_data['email'];
//             $_SESSION['role'] = $fetch_data['role'];
//             $_SESSION['login_time'] = $_SESSION['mulai_login'] + (30 * 60);
//             $penting->redirect($_ENV['LINKWEB'] . 'auth/proses/verifikasi_login.php', true);
//         } else {
//             echo '<script>alert("Username 1 atau Password tidak boleh kosong");</script>';
//             $penting->redirect($_ENV['LINKWEB'] . 'auth/login.php', true);
//         }
//     }
// }

// $verify = new FilePenting();

// $submit = htmlspecialchars($_POST['submit']);
// if (isset($_POST['remember'])) {
//     setcookie('username', $_POST['username'], time() + 86400);
//     setcookie('password', $_POST['password'], time() + 86400);
// }
// $check_active = mysqli_fetch_assoc(mysqli_query($con, "SELECT nama,username,is_active,password,role FROM user WHERE username='$username'"));
// if ($check_active['is_active'] == 1) {
//     if (password_verify($password, $check_active['password'])) {
//         session_start();
//         $_SESSION['username'] = $check_active['username'];
//         $_SESSION['nama'] = $check_active['nama'];
//         $_SESSION['password'] = $$check_active['password'];
//         if ($check_active['role'] == 1) {
//             $verify->redirect('../../admin/index.php', true);
//         } else {
//             $verify->redirect('../../user/index.php', true);
//         }
//     } else {
//         $verify->add_with_type('Password salah', 'danger', '../login.php');
//     }
// } else {
//     $verify->add_with_type('Username anda belum aktif,silahkan Check email untuk aktivasi', 'danger', '../login.php');
// }
