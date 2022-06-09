<?php
require_once __DIR__ . '/../../inc/koneksi.php';
require_once __DIR__ . '/../../functions/penting.php';
?>




<?php
$sql_user = 'SELECT nama, username, email, id_user FROM user';
$query_user = mysqli_query($con, $sql_user);

$sql_book = 'SELECT id_buku, judulbuku, kategoribuku, author, file_buku,stok FROM hlmnbuku';
$query_book = mysqli_query($con, $sql_book);

require_once  __DIR__ . '/../../template/admin/header.php';
?>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6" style="width: 0px;">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <p style="font-family: 'Segoe UI', Tahoma, Verdana, sans-serif; font-size:26px">E-lib</p>
                        </b>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kelolaanggota.php" aria-expanded="false"><i class="mdi mdi-account-network"></i><span class="hide-menu">Kelola Anggota</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="kelolabuku.php" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Kelola Buku</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span class="hide-menu">Table</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="icon-material.html" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Icon</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                                <li class="breadcrumb-item"><a href="index.php" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Kelola Buku</li>
                            </ol>
                        </nav>
                        <h1 class="mb-0 fw-bold">Kelola Buku</h1>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <a href="book/add-book.php"><button type="button" class="btn btn-primary" style="margin-bottom: 5px;">Tambah buku</button></a>

                <div class="row">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id Buku</th>
                                        <th>Judul Buku</th>
                                        <th>Kategori</th>
                                        <th>Author</th>
                                        <th>File Buku</th>
                                        <th>stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    while ($row = mysqli_fetch_array($query_book)) {
                                        echo '<tr>';
                                        echo "<td>" . $row['id_buku'] . "</td>";
                                        echo "<td>" . $row['judulbuku'] . "</td>";
                                        echo "<td>" . $row['kategoribuku'] . "</td>";
                                        echo "<td>" . $row['author'] . "</td>";
                                        echo "<td>" . $row['file_buku'] . "</td>";
                                        echo "<td>" . $row['stok'] . "</td>";
                                        echo "<td><a href='./book/form-edit.php?id_buku=" . $row['id_buku'] . "'>Ubah</a>
                                      <a href='./book/delete-book.php?id_buku=" . $row['id_buku'] . "'>Hapus</a></td>";
                                        echo '</tr>';
                                    }
                                    ?>

                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- Column -->

                </div>

            </div>

            <?php require_once __DIR__ . '/../../template/admin/footer.php';
            ?>
            <script>
                $(document).ready(function() {
                    $("title").html("<?php echo $_ENV['NAMA_WEB'] ?> - Kelola Buku");
                    $("a.navbar-brand").html(" <?php echo $_ENV['NAMA_WEB'] ?> - Kelola Buku");
                    $("p.nama_web").html("Silahkan mendaftar akun anda");
                })
            </script>