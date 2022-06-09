<?php

require_once __DIR__ . '/../../functions/penting.php';
require_once __DIR__ . '/../../functions/Cookies.php';
$penting = new FilePenting();
$Cookie = new CookieDoang();

if (!empty($_SESSION['username'] && $_SESSION['email'])) {
    $Cookie->cookie_in($con);
    if ($_SESSION['role'] == 1) {
        $penting->redirect('../../admin/index.php', true);
    } else {
        $penting->redirect('../../user/index.php', true);
    }
} else {
    $Cookie->cookie_out($con);
    $penting->redirect($_ENV['LINKWEB'] . 'auth/login.php', true);
}
