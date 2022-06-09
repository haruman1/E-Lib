<?php

require_once __DIR__ . '/../../../inc/koneksi.php';
require_once __DIR__ . '/../../../functions/penting.php';

$id_user = $_GET["id_user"];//mengambil data yg dikirim
$query = mysqli_query($con,"Delete from user where id_user = '$id_user'");

if ($query) {
    header('Location: ../kelolaanggota.php?status=sukses');
} else {
    echo "data gagal dibuang";
}
