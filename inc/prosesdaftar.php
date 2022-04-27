<?php

$post = [
  'email' => $_POST['email'],
  'token' => substr(number_format(time() * rand(), 0, '', ''), 0, 10),
];
$json = json_encode($post);

function curl_get_contents($url)
{
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);

  $data = curl_exec($ch);
  curl_close($ch);

  return $data;
}
?>
