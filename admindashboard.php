 <?php
    include_once './inc/kon.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/css/common/admindashboard.css">
    
    <title>AdminDashboard</title>
</head>
<body>
<header>
      <article id="header">
        <a href="#homepage" class="brand">E - Lib</a>
      </article>
</header>
<sidebar>
  <header>ADMIN</header>
  <ul>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Add Book</a></li>
    <li><a href="#">Logout</a></li>
  </ul>
</sidebar>
<?php
$sql = 'SELECT nama, username, email, id_user FROM user';
$query = mysqli_query($con, $sql)
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
                  <h1>0</h1>
                </div>
              </td>
              <td>
                <div class="box1">
                  <h2>Total Buku</h2>
                  <h1>0</h1>
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
                  <th>Penerbit</th>
                  <th>kategori</th>
                  <th>Stok</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Cell 1</td>
                  <td>Cell 2</td>
                  <td>Cell 3</td>
                  <td>Cell 4</td>
                </tr>
                <tr>
                  <td>Cell 1</td>
                  <td>Cell 2</td>
                  <td>Cell 3</td>
                  <td>Cell 4</td>
                </tr>
                <tr>
                  <td>Cell 1</td>
                  <td>Cell 2</td>
                  <td>Cell 3</td>
                  <td>Cell 4</td>
                </tr>
                <tr>
                  <td>Cell 1</td>
                  <td>Cell 2</td>
                  <td>Cell 3</td>
                  <td>Cell 4</td>
                </tr>
                <tr>
                  <td>Cell 1</td>
                  <td>Cell 2</td>
                  <td>Cell 3</td>
                  <td>Cell 4</td>
                </tr>
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
                  <th> - </th>
                </tr>
              </thead>
              <tbody>
                <?php
                while ($row = mysqli_fetch_array($query))
                {
                  echo '<tr>
                      <td>'.$row['nama'].'</td>
                      <td>'.$row['username'].'</td>
                      <td>'.$row['email'].'</td>
                      <td>'.$row['id_user'].'</td>
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
    session_start();
    echo "Halo ". $_SESSION["username"];
    ?> -->
</body>
</html>
