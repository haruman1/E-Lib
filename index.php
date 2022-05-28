<?php
include_once __DIR__ . './inc/env.php'

?>



<!DOCTYPE html>
<html>

<head>
  <title>Perpustakaan Online <?php echo $_ENV['NAMA_WEB']  ?></title>
  <link rel="stylesheet" href="./assets/styles/css/style.css?v=2.0.1" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <!-- Header -->
  <header>
    <article id="header">
      <a href="#homepage" class="brand"></a>
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
    <article id="home">
      <div class="home container">
        <div class="content">
          <div class="content-top">
            <h1 class="section-title"><?php echo $_ENV['NAMA_WEB']  ?></h1>
          </div>
          <div class="content-bottom">
            <p>
              <i>"Kadang-kadang, kamu membaca buku dan itu memenuhi kamu
                dengan semangat evangelis yang aneh ini, dan kamu menjadi
                yakin bahwa dunia yang hancur tidak akan pernah disatukan
                kembali kecuali dan sampai semua manusia yang hidup membaca
                buku itu." <span>-John Green, The Fault in Our Stars</span></i>
            </p>
          </div>
          <form action="<?php echo $_ENV['LINK_WEB']  ?>/category/book/search/index.php" method="POST">
            <div class="search">
              <div class="input-book">
                <input type="text" placeholder="Search buku, author, kategori, sinopsis" name="search" />
              </div>
              <div class="search-book">
                <button type="submit" name="submit-search">
                  <a href="#"><img src="./assets/image/search.png" alt="" class="img-search" /></a>
                </button>
          </form>
        </div>
      </div>
      </div>
      </div>
    </article>

    <article id="book">
      <div class="book container">
        <div class="book-head">
          <h1 class="section-title">Trending</h1>
          <div class="line"></div>
        </div>
        <div class="all-book">
          <div class="book-item">
            <div class="books">
              <div class="book-desc">
                <div class="book-img">
                  <img src="assets/image/buku1.jpg" class="img" alt="img" />
                </div>
                <div class="book-info">
                  <h3>Catcher in The Rye</h3>
                  <p>J.D. Salinger</p>
                </div>
              </div>
              <div class="book-desc">
                <div class="book-img">
                  <img src="assets/image/buku2.jpg" class="img" alt="img" />
                </div>
                <div class="book-info">
                  <h3>Someone Like You</h3>
                  <p>Roald Dahl</p>
                </div>
              </div>
              <div class="book-desc">
                <div class="book-img">
                  <img src="assets/image/buku3.jpg" class="img" alt="img" />
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
<script>
  // Add active class to the current button (highlight it)
  var header = document.getElementById('header');
  var menu = header.getElementsByClassName('menu');
  for (var i = 0; i < menu.length; i++) {
    menu[i].addEventListener('click', function() {
      var current = document.getElementsByClassName('active');
      current[0].className = current[0].className.replace(' active', '');
      this.className += ' active';
    });
  }
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>