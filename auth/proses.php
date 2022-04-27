<?php
$post = [
  'name' => $_POST['nama'],

  'email' => $_POST['email'],
  'username' => $_POST['username'],
  'password' => $_POST['password'],
];

$ch = curl_init('http://localhost/UTSPemWeb/auth/send.php');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_ENCODING, '');

header('Content-Type: text/html');
$data = curl_exec($ch);
echo $data;
?>
