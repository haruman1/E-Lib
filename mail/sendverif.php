 <?php

    use PHPMailer\PHPMailer\PHPMailer;

    require __DIR__ . '/../vendor/autoload.php';
    $email = new PHPMailer();
    $email->isSMTP();
    $email->SMTPDebug = 0;
    $email->Host = 'smtp.gmail.com';
    $email->Port = 587;
    $email->SMTPSecure = 'tls';
    $email->SMTPAuth = true;
    $email->Username = 'harcoc6@gmail.com';
    $email->Password = 'wanasigra123';
    $email->setFrom('noreply@e-book.com', 'e-book');
    $email->addAddress($_POST['email']);
    $email->Subject = 'Verification';
    $email->msgHTML(file_get_contents('../template/mail/verif.php'), __DIR__);
    if ($email->send()) {
        echo '<script>alert("Email berhasil dikirim")</script>
        windows.location.href="../auth/login.php"</script>';
    } else {
        echo 'Email not sent' . $email->ErrorInfo;
    }
