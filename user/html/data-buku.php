
<?php
require_once '../../inc/env.php';
require_once '../../inc/koneksi.php';

$query = "SELECT * FROM hlmnbuku where id_buku = '$_GET[id_buku]'";
$result = mysqli_query($con, $query);
$data = mysqli_fetch_array($result);
?>