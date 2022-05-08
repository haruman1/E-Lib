<?php
require_once '../inc/kon.php';
require_once '../inc/includepenting.php';
$apakah_login = mysqli_query($con, "SELECT * FROM user WHERE username='$_SESSION[username]'");
$result = mysqli_fetch_array($apakah_login);
$admin = new FilePenting();
if ($result['role'] == 1) {


    session_start();


    $_SESSION['username'] = $check_active['username'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../assets/styles/css/style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin <?php echo $_ENV['NAMA_WEB']  ?></title>
    </head>

    <body>

    </body>

    </html>
<?php
} elseif ($apkh_login['role'] == '2') {

    $admin->redirect('../user/index.php', true);
} else {
    $admin->redirect('../login.php', true);
}
?>