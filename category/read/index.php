<?php
include_once __DIR__ . '/../functions/penting.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <title><?php echo $_ENV['NAMA_WEB']  ?> Perpustakaan Online</title>
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/style.css" />
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/common/readbook.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="#homepage" class="brand">E - Lib</a>
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
                        <div id="read">
                            <iframe src="https://drive.google.com/file/d/1zSX0bymR79dhr_nedlpTK5aDByXJedaQ/preview">
                            </iframe>
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