<!-- Body -->
<?php
require_once  __DIR__ .  '/../template/category/header.php';

?>

<main>
    <section id="category" class="category container">

        <!-- Left Panel -->
        <div class="left-side">
            <div class="head">
                <h2 class="section-title">Kategori</h2>
            </div>
            <div class="content">
                <div class="item box">
                    <h3 id="AB">Author's Book</h3>
                    <div class="list-category">
                        <div class="item-list">
                            <div class="item-img">
                                <a href="<?php echo $_ENV['LINK_WEB']  ?>category/book/borrow/">
                                    <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1.jpg" alt="img" class="pic">
                                </a>
                            </div>
                            <div class="item-info">
                                <h4>Catcher in The Rye</h4>
                                <p>J.D. Salinger</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku2.jpg" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>Someone Like You</h4>
                                <p>Roald Dahl</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku3.jpg" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>The Lord Of The Rings</h4>
                                <p>J.R.R Tolkein</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku4.jfif" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>The Shinning</h4>
                                <p>Stephen King</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item box">
                    <h3 id="History">History</h3>
                    <div class="list-category">
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku5.jpg" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>The History of The Ancient World</h4>
                                <p>Susan Wise Bauer</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku6.jpg" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>New World A-Coming</h4>
                                <p>Judith Weisenfeld</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku7.jpg" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>Sejarah Dunia Lengkap</h4>
                                <p>Miftakhuddin</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku8.jfif" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>Myths, History and Art</h4>
                                <p>Basil Markesinis</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item box">
                    <h3 id="BnM">Business & Money</h3>
                    <div class="list-category">
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku9.jfif" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>Introduction to Business Management</h4>
                                <p>Barney Erasmus</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku10.jpg" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>Business Innovation</h4>
                                <p>Praveen Gupta</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku11.jfif" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>Small Business Big Money</h4>
                                <p>Akin Alabi</p>
                            </div>
                        </div>
                        <div class="item-list">
                            <div class="item-img">
                                <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku12.jfif" alt="img" class="pic">
                            </div>
                            <div class="item-info">
                                <h4>The Lean Startup</h4>
                                <p>Eric Ries</p>
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
                <form action="<?php echo $_ENV['LINK_WEB']  ?>category/book/search/" method="POST" class="search-form">
                    <label>
                        <input type="search" class="search-field" placeholder="Search..." name="search">
                    </label>
                    <button type="submit" name="submit-search">
                        <a href="#" class="search-btn"><img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/search.png" class="search-btn" /></a>
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

            <?php
            require_once $_ENV['LINK_WEB'] . 'template/category/footer.php';
            ?>