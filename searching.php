 <?php
    include_once './inc/kon.php';
    ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Cari Buku</title>
     <link rel="stylesheet" href="./assets/styles/css/common/search.css">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>

 <body>
     <!-- Header -->
     <header>
         <article id="header">
             <a href="index.php" class="brand">E - Lib</a>
             <nav>
                 <ul>
                     <li><a href="./index.php" class="menu">Home</a></li>
                     <li><a href="#category" class="menu">Book</a></li>
                     <li><a href="#" class="menu">Genre</a></li>
                     <li><a href="./BookmarkPage.php" class="menu">Bookmark</a></li>
                 </ul>
             </nav>
         </article>
     </header>

     <!-- Body -->
     <main>
         <section id="category" class="category container">

             <!-- Left Panel -->
             <div class="left-side">

                 <div class="head">
                     <h2 class="section-title">Search Result</h2>
                 </div>

                 <?php

                    if (isset($_POST['submit-search'])) {
                        $search = mysqli_real_escape_string($conn, $_POST['search']);
                        $sql = "SELECT * FROM hlmnbuku WHERE judulbuku LIKE '%$search%' OR textbuku LIKE '%$search%' OR kategoribuku LIKE '%$search%' OR author LIKE '%$search%'";
                        $result = mysqli_query($conn, $sql);
                        $queryResults = mysqli_num_rows($result);



                        if ($queryResults > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<p style='margin: 10px';>Terdapat " . $queryResults . " Pencarian Serupa</P>";
                                echo
                                "<div class='content'>
                                        <div class='item box'>
                                            <div class='list-category'>
                                                <div class='item-list'>
                                                    <div class='item-img'>
                                                        <a href='BorrowPage.php?title=" . $row['judulbuku'] . "&textbuku=" . $row['textbuku'] . "&kategoribuku=" . $row['kategoribuku'] . "&author=" . $row['author'] . "'>
                                                            <img src='./assets/image/buku1.jpg' alt='img' class='pic'>
                                                        </a>
                                                    </div>
                                                    <div class='item-info'>
                                                        <h4>" . $row['judulbuku'] . "</h4>
                                                        <p>" . $row['author'] . "</p>
                                                    </div>
                                                </div>
                                                <div class='sinopsis'>
                                                    <p>" . $row['textbuku'] . "</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ";
                            }
                        } else {
                            echo "Tidak ada hasil pencarian yang sesuai!";
                        }
                    }



                    ?>
             </div>

             <!-- Right Panel -->
             <div class="right-side">

                 <!-- Search Box -->
                 <div class="search box">
                     <h3>Search Book</h3>
                     <form action="searching.php" method="POST" class="search-form">
                         <label>
                             <input type="search" class="search-field" placeholder="Search..." name="search">
                         </label>
                         <button type="submit" name="submit-search">
                             <a href="#" class="search-btn"><img src="/assets/image/search.png" class="search-btn" /></a>
                         </button>
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