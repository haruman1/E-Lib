<?php
require_once '../inc/koneksi.php';
require_once '../functions/penting.php';
$apakah_login = mysqli_query($con, "SELECT * FROM user WHERE username='$_SESSION[username]'");
$result = mysqli_fetch_array($apakah_login);
$admin = new FilePenting();
if (!empty($_SESSION['username'] || $_SESSION['password'])) {
    if ($result['role'] == 1) {

        $_SESSION['username'] = $result['username'];
        $_SESSION['nama'] = $result['nama'];

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../assets/styles/css/common/admindashboard.css?v=1.0">

            <title><?php echo $_ENV['NAMA_WEB']  ?> HALAMAN ADMIN</title>
        </head>

        <body>
            <header>
                <article id="header">
                    <a href="#homepage" class="brand"><?php echo $_ENV['NAMA_WEB']  ?></a>
                </article>
            </header>
            <sidebar>
                <header> ADMIN</header>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Add Book</a></li>
                    <li><a href="../auth/logout.php">Logout</a></li>
                </ul>

            </sidebar>
            <center>
                <h1>Hallo <?php echo $_SESSION['nama'] ?></h1>
            </center>
            <?php
            $sql_user = 'SELECT nama, username, email, id_user FROM user';
            $query_user = mysqli_query($con, $sql_user);

            $sql_book = 'SELECT judulbuku, kategoribuku, author FROM hlmnbuku';
            $query_book = mysqli_query($con, $sql_book);
            ?>

            <main>

                <div id="content">
                    <center>
                        <div class="count_data">
                            <table>
                                <tr>
                                    <td>
                                        <div class="box1">
                                            <h2>Total User</h2>
                                            <h1>
                                                <?php
                                                echo mysqli_num_rows($query_user);
                                                ?>
                                            </h1>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="box1">
                                            <h2>Total Buku</h2>
                                            <h1>
                                                <?php
                                                echo mysqli_num_rows($query_book);
                                                ?>
                                            </h1>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="table_book">
                            <div class="container">
                                <table id="list_book">
                                    <h1>List Buku</h1>
                                    <thead>
                                        <tr>
                                            <th>Judul Buku</th>
                                            <th>Kategori</th>
                                            <th>Author</th>
                                            <!-- <th>Stok</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query_book)) {
                                            echo '<tr>
                      <td>' . $row['judulbuku'] . '</td>
                      <td>' . $row['kategoribuku'] . '</td>
                      <td>' . $row['author'] . '</td>
                    </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="table_user">
                            <div class="container">
                                <table id="list_book">
                                    <h1>List User</h1>
                                    <thead>
                                        <tr>
                                            <th>username</th>
                                            <th>Password</th>
                                            <th>Email</th>
                                            <th> Id </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while ($row = mysqli_fetch_array($query_user)) {
                                            echo '<tr>
                      <td>' . $row['nama'] . '</td>
                      <td>' . $row['username'] . '</td>
                      <td>' . $row['email'] . '</td>
                      <td>' . $row['id_user'] . '</td>
                    </tr>';
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
                </center>
                </div>
            </main>
            <!-- <?php

                    echo "Halo " . $_SESSION["username"];
                    ?> -->
        </body>

        </html>
<?php
    } else {
        $admin->redirect("../auth/login.php", true);
    }
} elseif ($apkh_login['role'] == 2) {

    $admin->redirect('../user/index.php', true);
} else {
    $admin->redirect('../auth/login.php', true);
}
?>