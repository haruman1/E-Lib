<?php

require_once 'env.php';
$jaringan = $_ENV['DB_HOST'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];
$db = $_ENV['DB_DATABASE'];
$con = mysqli_connect($jaringan, $user, $pass, $db);
mysqli_select_db($con, $db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "";
}
