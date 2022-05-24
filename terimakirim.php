<?php


require_once 'functions/penting.php';
$ambilData = new FilePenting();
$get = json_decode(file_get_contents("php://input"));
if (empty($get->email or empty($get->token))) {
    echo 'Data Email dan password tidak ada';
} else {
    echo "DATA ADA,DENGAN DATA :" . $get->email . " dan " . $get->token;
}
