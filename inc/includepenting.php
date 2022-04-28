<?php

//buat seperti session_flashdata di codeigniter
class FilePenting
{
  public static function render()
  {
    if (!isset($_SESSION['messages'])) {
      return null;
    }
    $messages = $_SESSION['messages'];
    unset($_SESSION['messages']);
    return implode('<br/>', $messages);
  }

  public static function add($message)
  {
    if (!isset($_SESSION['messages'])) {
      $_SESSION['messages'] = [];
    }
    $_SESSION['messages'][] = $message;
  }
  public static function add_with_type($message, $type)
  {
    if (!isset($_SESSION['messages'])) {
      $_SESSION['messages'] = [];
    }
    $_SESSION['messages'][] = "<div class='alert alert-$type'>$message</div>";
  }
  public static function curl_get_contents($url)
  {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }
}
$file_penting = new FilePenting();

?>
