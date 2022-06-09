<?php
include_once  __DIR__ . '/../../functions/penting.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_ENV['NAMA_WEB']  ?> Kategori Buku</title>
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/common/Category.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="<?php echo $_ENV['LINK_WEB']  ?>index.php" class="brand"><?php echo $_ENV['NAMA_WEB']  ?></a>
            <nav>
                <ul>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>index.php" class="menu">Home</a></li>
                    <li><a href="#category" class="menu">Book</a></li>
                    <li><a href="#" class="menu">Genre</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category/book/mark/" class="menu">Bookmark</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>auth/login.php" class="menu active">Login</a></li>
                </ul>
            </nav>
        </article>
    </header>