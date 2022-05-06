<!DOCTYPE html>
<html>

<head>
  <title>Bookmark</title>

  <link rel="stylesheet" href="./assets/styles/css/common/Bookmark.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
  <!-- Header -->
  <header>
    <article id="header">
      <a href="index.html" class="brand">E - Lib</a>
      <nav>
        <ul>
          <li><a href="index.html" class="menu">Home</a></li>
          <li><a href="CategoryBook.html" class="menu">Book</a></li>
          <li><a href="#" class="menu">Genre</a></li>
          <li><a href="BookmarkPage.html" class="menu">Bookmark</a></li>
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
                <div class="item-img">
                  <img src="./assets/image/buku1.jpg" alt="img" class="pic" />
                </div>
                <div class="item-info">
                  <h3>Catcher in The Rye</h3>
                  <p>J.D. Salinger</p>
                  <p><i>hal 204</i></p>
                  <div class="btn">
                    <a href="Readbook.html" class="lanjut-btn">Lanjutkan Membaca</a>
                  </div>
                </div>
              </div>
              <div class="item-list">
                <div class="item-img">
                  <img src="./assets/image/buku2.jpg" alt="img" class="pic" />
                </div>
                <div class="item-info">
                  <h3>Someone Like You</h3>
                  <p>Roald Dahl</p>
                  <p><i>hal 56</i></p>
                  <div class="btn">
                    <a href="#" class="lanjut-btn">Lanjutkan Membaca</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item box">
            <h3 id="AB">Baca Nanti</h3>
            <div class="list-category">
              <div class="item-list">
                <div class="item-img">
                  <img src="./assets/image/buku3.jpg" alt="img" class="pic" />
                </div>
                <div class="item-info">
                  <h3>The Lord Of The Rings</h3>
                  <p>J.R.R Tolkein</p>
                  <div class="btn">
                    <a href="#" class="lanjut-btn">Baca Sekarang</a>
                  </div>
                </div>
              </div>
              <div class="item-list">
                <div class="item-img">
                  <img src="./assets/image/buku4.jfif" alt="img" class="pic" />
                </div>
                <div class="item-info">
                  <h3>The Shinning</h3>
                  <p>Stephen King</p>
                  <div class="btn">
                    <a href="#" class="lanjut-btn">Baca Sekarang</a>
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
    <p>Copyright © 2022 Kijang1. All rights reserved</p>
  </footer>
</body>

</html>