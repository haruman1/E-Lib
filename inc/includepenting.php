<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
require 'env.php';
require __DIR__ . '/../vendor/autoload.php';
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
    // persiapkan curl
    $ch = curl_init();

    // set url
    curl_setopt($ch, CURLOPT_URL, $url);

    // set user agent
    curl_setopt(
      $ch,
      CURLOPT_USERAGENT,
      'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13'
    );

    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    // $output contains the output string
    $output = curl_exec($ch);

    // tutup curl
    curl_close($ch);

    // mengembalikan hasil curl
    return $output;
  }
  public static function curl_post_contents($url, $content)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
  }
  public static function badan_email($email, $nama, $token)
  {
    require '../mail/sendverif.php';
  }
  public static function kirim_email($email, $messageBody, $token)
  {
    $email = new PHPMailer();
    $email->isSMTP();
    $email->SMTPDebug = 0;
    $email->Host = $_ENV['MAIL_HOST'];
    $email->Port = $_ENV['MAIL_PORT'];
    $email->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
    $email->SMTPAuth = true;
    $email->Username = $_ENV['MAIL_USERNAME'];
    $email->Password = $_ENV['MAIL_PASSWORD'];
    $email->setFrom('noreply@e-book.com', $_ENV['NAMA_WEB']);
    $email->addAddress($email);
    $email->Subject = 'Verification ' . $_ENV['NAMA_WEB'];

    $email->msgHTML($messageBody);

    if ($email->send()) {
      echo '<script>alert("Pesan Vefikasi berhasil dikirim")</script>
             <script>windows.location.href="../auth/login.php"</script>';
    } else {
      echo 'Email not sent' . $email->ErrorInfo;
    }
  }
}

$file_penting = new FilePenting();

?>
