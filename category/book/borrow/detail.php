<?php
require_once __DIR__ . '../../../../functions/penting.php';

?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $_ENV['NAMA_WEB']  ?> Detail Pinjam</title>
    <link rel="stylesheet" href="<?php echo $_ENV['LINK_WEB']  ?>assets/styles/css/common/BorrowPageDetail.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <!-- Header -->
    <header>
        <article id="header">
            <a href="./index.html" class="brand">E - Lib</a>
            <nav>
                <ul>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>index.php" class="menu">Home</a></li>
                    <li><a href="<?php echo $_ENV['LINK_WEB']  ?>/category" class="menu">Book</a></li>

                </ul>
            </nav>
        </article>
    </header>

    <!-- Body -->
    <main>
        <div class="peminjaman container">
            <!-- Left Panel -->
            <div class="left-panel">
                <div class="head">
                    <h2 class="section-title">Peminjaman</h2>
                </div>
                <div class="content">
                    <div class="item box">
                        <h3 id="AB">Buku yang akan dipinjam</h3>
                        <div class="list-category">
                            <div class="item-list">
                                <div class="item-img">
                                    <a href="BorrowPage.html">
                                        <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1.jpg" alt="img" class="img" syle="height: 500px" />
                                    </a>
                                    <div class="item-info">
                                        <a href="BorrowPage.html">
                                            <h4>Catcher in The Rye</h4>
                                            <p>J.D. Salinger</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item box">
                        <h3 id="Durasi">Durasi Peminjaman</h3>
                        <p>Durasi Pinjam</p>
                        <form id="selectdurasi" name="selectdurasi">
                            <select class="inputbox" onclick="document.getElementById('durasi').innerHTML= value" required id="durasihari" name="durasihari">
                                <option>--Pilih Durasi--</option>
                                <option value='7'>7 Hari</option>
                                <option value='14'>14 Hari</option>
                                <option value='28'>28 Hari</option>
                                <option value='120'>120 Hari</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Panel -->
            <div class="right-panel">

                <!-- Ringkasan Box -->
                <div class="pinjam box">
                    <h3>Ringkasan Pinjaman</h3>
                    <div class="buku-dipinjam column">
                        <h3>Buku yang dipinjam</h3>
                        <p>Catcher in The Rye</p>
                        <p>J.D. Salinger</p>
                    </div>
                    <div class="durasi-pinjam column">
                        <h3>Durasi Pinjam</h3>
                        <p id="durasi2">- -</p>
                    </div>
                    <a>
                        <button class="pinjam-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Pinjam</button>
                    </a>
                </div>
            </div>
            <!-- The Modal -->
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ringkasan Pinjaman</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h3 style="padding-bottom: 10px">Buku yang dipinjam</h3>
                            <img src="<?php echo $_ENV['LINK_WEB']  ?>assets/image/buku1.jpg" alt="" syle="height: 500px" />
                            <div class="nama-buku" style="border-bottom: 1px solid #e1e8ee; padding-bottom: 20px;">
                                <h3 style="padding-bottom: 10px">Nama Buku</h3>
                                <p>Catcher in The Rye</p>
                            </div>
                            <div class="nama-penulis" style="border-bottom: 1px solid #e1e8ee; padding-bottom: 20px;">
                                <h3 style="padding-bottom: 10px">Penulis Buku</h3>
                                <p>J.D. Salinger</p>
                            </div>
                        </div>
                        <div class="nama-buku" style="border-bottom: 1px solid #e1e8ee; padding-bottom: 20px;">
                            <h3 style="padding-bottom: 10px">Durasi Pinjam</h3>
                            <p id="durasi" name="durasi"> </p>
                        </div>
                        <div class="nama-buku" style="border-bottom: 1px solid #e1e8ee; padding-bottom: 20px;">
                            <h3 style="padding-bottom: 10px">Hari ini</h3>
                            <p id="hariini"></p>
                        </div>
                        <div class="durasi-pinjam" style="border-bottom: 1px solid #e1e8ee; padding-bottom: 20px;">
                            <h3 style="padding-bottom: 10px">Pengembalian</h3>
                            <p>Durasi Selesai</p>
                            <p id="WaktuPinjem"></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
            <script src="https://momentjs.com/downloads/moment.min.js"></script>
            <script type="text/javascript">
                document.getElementById("durasihari").addEventListener('change', (e) => {
                    const selectedPackage = document.getElementById("durasihari").value;
                    var durhari = document.getElementById("selectdurasi").durasihari.value;
                    var tampilhari = document.getElementById('hariini').innerHTML = moment().format('Do, MMMM, YYYY');
                    var pinjemwaktu = document.getElementById('WaktuPinjem').innerHTML = moment().add(selectedPackage, 'days').calendar();
                });
            </script>
    </main>
    <footer>
        <p>Copyright <?php echo '© ' . date('Y') . ' ' . $_ENV['NAMA_PEMBUAT']  ?>. All rights reserved</p>
    </footer>
</body>

</html>