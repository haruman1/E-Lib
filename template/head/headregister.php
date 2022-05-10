<?php

require_once __DIR__ . '../../../inc/env.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/css/common/2_registrasi.css?=?v=1.0">
    <link rel="stylesheet" href="../assets/styles/css/style.css">

    <title><?php echo $_ENV['NAMA_WEB'] ?> Register</title>
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="#homepage" class="brand"><?php echo $_ENV['NAMA_WEB'] ?></a>
            <nav>
                <ul>
                    <li><a href="landingpage.html" class="menu">Home</a></li>
                    <li><a href="#book" class="menu">Book</a></li>
                    <li><a href="#About" class="menu">About</a></li>
                    <li><a href="#" class="menu">Contact</a></li>
                </ul>
            </nav>
        </article>
    </header>
    <main>

        <div id="rangka">
            <div class="form">
                <div class="regis">
                    <div class="regis_header">
                        <h3><?php echo $_ENV['NAMA_WEB'] ?> Register</h3>
                        <p>Please enter your credentials to regis</p>
                    </div>
                </div>
