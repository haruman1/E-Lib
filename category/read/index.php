<?php
include_once __DIR__ . '/../../functions/penting.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <title><?php echo $_ENV['NAMA_WEB']  ?> Perpustakaan Online</title>
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/style.css" />
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/common/readbook.css?v=1.1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="<?php echo $_ENV['LINK_WEB']  ?>" class="brand"><?php echo $_ENV['NAMA_WEB']  ?></a>
            <nav>
                <ul>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>" class="menu">Home</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category" class="menu">Book</a></li>
                    <li><a href="#" class="menu">About</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category/book/mark/" class="menu">Bookmark</a></li>
                </ul>
            </nav>
        </article>
    </header>
    <!-- Body -->
    <main>
        <article id="home">
            
            <div class="home container">
                <div id="main">
                    <div id="viewer">
                    <?php 
                        $id_buku = $_GET['id_buku'];
                        $sql = mysqli_query($con, "SELECT * FROM hlmnbuku WHERE id_buku = '$id_buku'");
                        $data = mysqli_fetch_array($sql);
                        ?>
                        <div id="read">
                            <iframe src="<?php echo $_ENV['LINK_WEB']  ?>admin/html/book/pdf/<?= $data['file_buku']?>" ></iframe>
                        </div>
                    </div>
                </div>
        </article>

    </main>


    </div>
    <footer>
        <p>Copyright <?php echo '© ' . date('Y') . ' ' . $_ENV['NAMA_PEMBUAT']  ?>. All rights reserved</p>
    </footer>
</body>

</html>