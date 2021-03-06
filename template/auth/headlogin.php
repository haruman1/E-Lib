<?php

require_once __DIR__ . '../../../inc/env.php';
require_once __DIR__ . '../../../functions/penting.php';
session_start();
if (isset($_SESSION['sudah_login']) || isset($_COOKIE['id_login'])) {
    $file_penting->redirect('../dashboard/', true);
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/styles/css/common/log.css?v=2.0" />

    <link rel="stylesheet" href="../assets/styles/css/style.css?v=1.0" />
    <title><?php echo $_ENV['NAMA_WEB'] ?> Login</title>
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="../index.php" class="brand"><?php echo $_ENV['NAMA_WEB'] ?></a>
            <nav>
                <ul>
                    <li><a href="../index.php" class="menu">Home</a></li>
                    <li><a href="../CategoryBook.php" class="menu">Book</a></li>
                    <li><a href="../about.php" class="menu">About</a></li>
                    <li><a href="../BookmarkPage.php" class="menu">Bookmark Page</a></li>
                </ul>
            </nav>
        </article>
    </header>

    <main>
        <div id="rangka">
            <div class="form">
                <div class="login">
                    <div class="login_header">
                        <h3>Login</h3>
                        <p>Please enter your credentials to login</p>
                    </div>
                </div>