<?php
require_once __DIR__ . '../../../../functions/penting.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_ENV['NAMA_WEB']  ?> Bookmark</title>

    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/common/Bookmark.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="<?php echo $_ENV['LINK_WEB']  ?>index.php" class="brand"><?php echo $_ENV['NAMA_WEB']  ?></a>
            <nav>
                <ul>
                    <li><a href="#home" class="menu active">Home</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category/" class="menu">Book</a></li>
                    <li><a href="#About" class="menu">About</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category/book/mark/" class="menu">Bookmark</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>auth/login.php" class="menu active">Login</a></li>
                </ul>
            </nav>
        </article>
    </header>

    <!-- Body -->
    <main>
        <section class="category container">
            <!-- Left Panel -->
            <div class="left-side">
                <div class="head">
                    <h2 class="section-title">Bookmark</h2>
                </div>
                <div class="content">
                    <div class="item box">
                        <h3 id="AB">Sedang dibaca</h3>
                        <div class="list-category">
                            <div class="item-list">
                                <?php 
                                $sql = mysqli_query($con, "SELECT * FROM hlmnbuku WHERE id = '4'");
                                $data = mysqli_fetch_array($sql);
                                ?>
                                <div class="item-img">
                                    <a href="<?= $_ENV['LINK_WEB']?>category/read/index.php?id_buku=<?= $data['id_buku']?>">
                                    <img src="<?= $_ENV['LINK_WEB']?>admin/html/book/cover/<?= $data['cover_buku']?>" alt="img" class="pic">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <h3><?= $data['judulbuku']?></h3>
                                    <p><?= $data['author']?></p>
                                    <p><i>hal 204</i></p>
                                    <div class="btn">
                                        <a href="<?php echo $_ENV['LINK_WEB']  ?>category/read/?id_buku=<?= $data['id_buku']?>" class="lanjut-btn">Lanjutkan Membaca</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-list">
                                <?php 
                                $sql = mysqli_query($con, "SELECT * FROM hlmnbuku WHERE id = '3'");
                                $data = mysqli_fetch_array($sql);
                                ?>
                                <div class="item-img">
                                    <a href="<?= $_ENV['LINK_WEB']?>category/read/index.php?id_buku=<?= $data['id_buku']?>">
                                    <img src="<?= $_ENV['LINK_WEB']?>admin/html/book/cover/<?= $data['cover_buku']?>" alt="img" class="pic">
                                    </a>
                                </div>
                                <div class="item-info">
                                    <h3><?= $data['judulbuku']?></h3>
                                    <p><?= $data['author']?></p>
                                    <p><i>hal 56</i></p>
                                    <div class="btn">
                                        <a href="<?php echo $_ENV['LINK_WEB']  ?>/category/read/?id_buku=<?= $data['id_buku']?>" class="lanjut-btn">Lanjutkan Membaca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item box">
                        <h3 id="AB">Baca Nanti</h3>
                        <div class="list-category">
                            <div class="item-list">
                                <?php 
                                $sql = mysqli_query($con, "SELECT * FROM hlmnbuku WHERE id = '6'");
                                $data = mysqli_fetch_array($sql);
                                ?>
                                <div class="item-img">
                                    <img src="<?= $_ENV['LINK_WEB']?>admin/html/book/cover/<?= $data['cover_buku']?>" alt="img" class="pic">
                                </div>
                                <div class="item-info">
                                    <h3><?= $data['judulbuku']?></h3>
                                    <p><?= $data['author']?></p>
                                    <div class="btn">
                                        <a href="<?php echo $_ENV['LINK_WEB']  ?>/category/read/?id_buku=<?= $data['id_buku']?>" class="lanjut-btn">Baca Sekarang</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-list">
                                <?php 
                                $sql = mysqli_query($con, "SELECT * FROM hlmnbuku WHERE id = '5'");
                                $data = mysqli_fetch_array($sql);
                                ?>
                                <div class="item-img">
                                    <img src="<?= $_ENV['LINK_WEB']?>admin/html/book/cover/<?= $data['cover_buku']?>" alt="img" class="pic">
                                </div>
                                <div class="item-info">
                                    <h3><?= $data['judulbuku']?></h3>
                                    <p><?= $data['author']?></p>
                                    <div class="btn">
                                        <a href="<?php echo $_ENV['LINK_WEB']  ?>/category/read/?id_buku=<?= $data['id_buku']?>" class="lanjut-btn">Baca Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="right-side">
                <!-- Search Box -->
                <div class="search box">
                    <h3>Search Book</h3>
                    <form role="search" class="search-form">
                        <label>
                            <input type="search" class="search-field" placeholder="Search..." />
                        </label>
                        <a href="#" class="search-btn"><img src="https://img.icons8.com/ios/50/000000/search--v1.png" class="search-btn" /></a>
                    </form>
                </div>

                <!-- Category List -->
                <div class="list box">
                    <h3>Category-list</h3>
                    <form role="listitem" class="list-form">
                        <ul>
                            <li><a href="#">Arts Book</a></li>
                            <li><a href="#AB">Author's Book</a></li>
                            <li><a href="#">Biographies</a></li>
                            <li><a href="#BnM">Business & Money</a></li>
                            <li><a href="#">Children's Books</a></li>
                            <li><a href="#">Cooking Receipts</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">Fantasy</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#History">History</a></li>
                            <li><a href="#">Literature</a></li>
                            <li><a href="#">Mystery</a></li>
                            <li><a href="#">New Releases 2022</a></li>
                            <li><a href="#">Political & Social Sciences</a></li>
                            <li><a href="#">Releases 2019</a></li>
                            <li><a href="#">Releases 2020</a></li>
                            <li><a href="#">Releases 2021</a></li>
                            <li><a href="#">Religion & Spirituality</a></li>
                            <li><a href="#">Romance</a></li>
                            <li><a href="#">Sci Fi</a></li>
                            <li><a href="#">Science & Math</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright <?php echo '© ' . date('Y') . ' ' . $_ENV['NAMA_PEMBUAT']  ?>. All rights reserved</p>
    </footer>
</body>

</html>