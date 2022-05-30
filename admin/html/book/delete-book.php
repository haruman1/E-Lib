<?php
            require_once '../../../inc/koneksi.php';
            require_once '../../../inc/includepenting.php';
?>

<?php
if(isset($_GET['id_buku'])){
    // $id_buku = $_GET["id_buku"];//mengambil data ygdikirim
    // $query = mysqli_query($con,"Select * from hlmnbuku where id_buku = '$id_buku'");
    $sql_cek = "select * from hlmnbuku where id_buku='".$_GET['id_buku']."'";
    $query_cek = mysqli_query($con, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php
    $pdf= $data_cek['file_buku'];
    if (file_exists("pdf/$pdf")){
        unlink("pdf/$pdf");
    }

    $sql_hapus = "DELETE FROM hlmnbuku WHERE id_buku='".$_GET['id_buku']."'";
    $query_hapus = mysqli_query($con, $sql_hapus);
    if ($query_hapus) {
        echo "<script> window.location.href = '../kelolabuku.php';</script>";
        }else{
        echo "gagal";
    }
?>
