<?php
session_start();
<<<<<<< HEAD

use PHPMailer\PHPMailer\PHPMailer;

=======
use PHPMailer\PHPMailer\PHPMailer;
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
require 'env.php';
require __DIR__ . '/../vendor/autoload.php';
//buat seperti session_flashdata di codeigniter
class FilePenting
{
<<<<<<< HEAD
  public static function backup_table_database($dbHost, $dbUsername, $dbPassword, $dbName, $tables = '*')
  {
    //menghubungkan & memilih database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    //Mendapatkan semua Table dengan (*)
    if ($tables == '*') {
      $tables = array();
      $result = $db->query("SHOW TABLES");
      while ($row = $result->fetch_row()) {
        $tables[] = $row[0];
      }
    } else {
      $tables = is_array($tables) ? $tables : explode(',', $tables);
    }
    //Loop melalui Table
    foreach ($tables as $table) {
      $result = $db->query("SELECT * FROM $table");
      $numColumns = $result->field_count;
      $return = "DROP TABLE $table;";
      $result2 = $db->query("SHOW CREATE TABLE $table");
      $row2 = $result2->fetch_row();
      $return .= "\n\n" . $row2[1] . ";\n\n";
      for ($i = 0; $i < $numColumns; $i++) {
        while ($row = $result->fetch_row()) {
          $return .= "INSERT INTO $table VALUES(";
          for ($j = 0; $j < $numColumns; $j++) {
            $row[$j] = addslashes($row[$j]);
            $row[$j] = preg_replace("\n", "\\n", $row[$j]);
            if (isset($row[$j])) {
              $return .= '"' . $row[$j] . '"';
            } else {
              $return .= '""';
            }
            if ($j < ($numColumns - 1)) {
              $return .= ',';
            }
          }
          $return .= ");\n";
        }
      }
      $return .= "\n\n\n";
    }
    //simpan file , alamat penyimpanan dan nama file
    $handle = fopen('backup/dumet-school.sql', 'w+');
    fwrite($handle, $return);
    fclose($handle);
  }
  public static function destroy_session_data()
  {
    //masih bingung hehehe
  }
  public static function redirect($url, $permanent = false)
  {
    header('Location: ' . $url, true, $permanent ? 301 : 302);
    exit();
  }
  public static function render_with_type()
  {
    if (!isset($_SESSION['messages'])) {
      return null;
    }
    $messages = $_SESSION['messages'];
    $type = $_SESSION['type'];
    echo '<div class="alert alert-' . $type . '">' . implode('<br/>', $messages) . '</div>';
  }
=======
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
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
<<<<<<< HEAD
  public static function add_with_type($message, $type, $location)
  {
    if (!isset($_SESSION['messages'])) {
      $_SESSION['messages'] = [];
      $_SESSION['type'] = [];
      $_SESSION['expire'] = time() + (1 * 10);
    }
    $_SESSION['type'] = $type;
    $_SESSION['messages'][] = "<div class='alert alert-$type'>$message</div>";
    echo '<script>window.location.href="' . $location . '"</script>';
=======
  public static function add_with_type($message, $type)
  {
    if (!isset($_SESSION['messages'])) {
      $_SESSION['messages'] = [];
    }
    $_SESSION['messages'][] = "<div class='alert alert-$type'>$message</div>";
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
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
<<<<<<< HEAD

=======
  public static function badan_email($email, $nama, $token)
  {
    require '../mail/sendverif.php';
  }
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
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
<<<<<<< HEAD
//bisa digunakan secara langsung atau tidak,bebass
$file_penting = new FilePenting();
=======

$file_penting = new FilePenting();

?>
>>>>>>> e8fa32eca49c7d42849bcb3fa8048f82031dc0d2
