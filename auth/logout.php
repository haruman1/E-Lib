<?php
require_once '../inc/includepenting.php';
$direct = new FilePenting();
if ($_SESSION['username'] and $_SESSION['password'] != NULL) {
    session_unset('username');
    session_unset('password');
    session_destroy();
    $direct->redirect('login.php', true);
} else {
    $direct->add_with_type('Anda belum login', 'danger', '../login.php');
}
