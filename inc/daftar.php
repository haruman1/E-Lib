 <?php

    use PHPMailer\PHPMailer\PHPMailer;

    require __DIR__ . '/../vendor/autoload.php';
    require_once 'env.php';
    require_once 'kon.php';

    $nama = htmlspecialchars($_POST['nama']);
    $email_user = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $is_active = 0;
    $role = 2;
    $token = substr(number_format(time() * rand(), 0, '', ''), 0, 10);
    $date_created = time();
    $buttonsubmit = htmlspecialchars($_POST['submit']);
    if (!isset($buttonsubmit)) {
        header("Location: ../index.php");
    } else {
        $query = mysqli_query($con, "INSERT INTO user_token (id, email, token, date_created) VALUES ('','$email_user', '$token', '$date_created')");
        if ($query == TRUE) {
            kirim_email($email_user, $token);
            $insert_user = mysqli_query($con, "INSERT INTO user (id_user, role,nama,  username, email, password, is_active, date_created) VALUES ('' ,'$role', '$nama', '$username', '$email_user', '$password', '$is_active', '$date_created')");
        } else {
            echo "alert('Gagal');";
        }
    }
    if (kirim_email($email_user, $token) == true) {
        $query = mysqli_query($con, "INSERT INTO user_token VALUES('','$email_user','$token','$date_created')");
        if ($query == true) {
            $insert_user = mysqli_query($con, "INSERT INTO user Values('','$role','$nama','$username','$email_user','$password','$is_active','$date_created')");
            echo "Berhasil";
        } else {
            echo "<script>alert('Data anda ada yang salah 1')</script>";
        }
    } else {
        echo "<script>alert('Data anda ada yang salah 2')</script>";
    }



    function kirim_email($email_user, $token)
    {

        require __DIR__ . '/../vendor/autoload.php';
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
        $email->addAddress($email_user);
        $email->Subject = 'Verification ' . $_ENV['NAMA_WEB'];

        $contentisi = array('email_user ' => $email_user, 'token' => $token);


        $opts = array(
            'http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => http_build_query($contentisi)
            )
        );
        $context = stream_context_create($opts);
        $email->msgHTML(file_get_contents(__DIR__ . '/../template/mail/send_verif.php', true, $context));
        if ($email->send()) {
            echo '<script>alert("Pesan Vefikasi berhasil dikirim")</script>
            <script>windows.location.href="../auth/login.php"</script>';
        } else {
            echo 'Email not sent' . $email->ErrorInfo;
        }
    }
