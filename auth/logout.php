<?php
require_once '../inc/includepenting.php';
$direct = new FilePenting();
if (!empty($_SESSION['username'] and $_SESSION['password'])) {
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    $direct->redirect('auth/login.php', true);
    exit;
} else {
    $direct->add_with_type('Anda belum login', 'danger', '../auth/login.php');
}
