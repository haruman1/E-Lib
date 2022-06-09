<?php
require_once __DIR__ . '../../../../functions/penting.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_ENV['NAMA_WEB']  ?> The Catcher in the Rye </title>
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/common/BorrowPage.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="index.php" class="brand"><?php echo $_ENV['NAMA_WEB']  ?></a>
            <nav>
                <ul>
                    <li><a href="index.php" class="menu">Home</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category/" class="menu">Book</a></li>
                    <li><a href="#" class="menu">About</a></li>
                    <li><a href="#" class="menu">Contact</a></li>
                </ul>
            </nav>
        </article>
    </header>

    <!-- Body -->
    <main>
        <section id="product" class="product container">

            <!-- Left Column -->
            <div class="left-column">
                <ul class="breadcrumb">
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>index.php">Home</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>category/">Buku</a></li>
                    <li>The Catcher in The Rye</li>
                </ul>
                <img id="imageBuku" src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1.jpg" alt="" style="height: 500px;">
            </div>


            <!-- Right Column -->
            <div class="right-column">

                <!-- Book Description -->
                <div class="product-description">
                    <span>Fiksi Dewasa / Oleh J. D. Salinger</span>
                    <h1>The Catcher in the Rye</h1>
                    <p>Saatnya Natal dan Holden Caulfield baru saja dikeluarkan dari sekolah lain. Melarikan diri dari penjahat di Pencey Prep, dia bermain pinball di sekitar New York City mencari hiburan dalam pertemuan singkat - menembak banteng dengan
                        orang asing di hotel selam, berkeliaran sendirian di sekitar Central Park, dipukuli oleh mucikari dan ditebang oleh mantan pacar. Kota ini indah dan mengerikan, dalam semua kesepian neon dan kemewahan kumuh, rasa kemungkinan dan
                        kekosongan yang bercampur. Holden melewatinya seperti hantu, selalu memikirkan adik perempuannya Phoebe, satu-satunya orang yang benar-benar memahaminya, dan tekadnya untuk melarikan diri dari kepalsuan dan menemukan kehidupan
                        yang berarti.</p>
                </div>

                <!-- book Configuration -->
                <div class="product-configuration">

                    <!-- Sisi -->
                    <div class="sisi-config">
                        <span>Sisi Buku</span>

                        <div class="sisi-pilih">
                            <button onclick="document.getElementById('imageBuku').src='<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1.jpg'">Depan</button>
                            <button onclick="document.getElementById('imageBuku').src='<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1Belakang.jpg'">Belakang</button>
                        </div>

                    </div>
                </div>

                <!-- Pinjam / Baca -->
                <div>
                    <a href="<?php echo $_ENV['LINK_WEB']  ?>category/borrow/detail.php" class="pinjam-btn">Pinjam</a>
                    <a href="auth/login.php" class="baca-btn">Sign in untuk membaca</a>
                </div>

                <div class="daftar">
                    <p style="display:inline-block;padding-top: 10px;">Atau lakukan </p>
                    <a href="<?php echo $_ENV['LINK_WEB']  ?>auth/register.php" style="color: #358ED7;">Registrasi</a>
                </div>
            </div>
        </section>

        <article id="book">
            <div class="book container">
                <div class="book-head">
                    <h1 class="section-title">Anda mungkin akan menyukai</h1>
                    <div class="line"></div>
                </div>
                <div class="all-book">
                    <div class="book-item">
                        <div class="books">
                            <div class="book-desc">
                                <div class="book-img">
                                    <a href="#product">
                                        <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1.jpg" class="img" alt="img">
                                    </a>
                                </div>
                                <div class="book-info">
                                    <h3>Catcher in The Rye</h3>
                                    <p>J.D. Salinger</p>
                                </div>
                            </div>
                            <div class="book-desc">
                                <div class="book-img">
                                    <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku2.jpg" class="img" alt="img">
                                </div>
                                <div class="book-info">
                                    <h3>Someone Like You</h3>
                                    <p>Roald Dahl</p>
                                </div>
                            </div>
                            <div class="book-desc">
                                <div class="book-img">
                                    <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku3.jpg" class="img" alt="img">
                                </div>
                                <div class="book-info">
                                    <h3>The Lord Of The Rings</h3>
                                    <p>J.R.R Tolkein</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <footer>
        <p>Copyright <?php echo '© ' . date('Y') . ' ' . $_ENV['NAMA_PEMBUAT']  ?>. All rights reserved</p>
    </footer>
</body>

</html>