<?php
require_once '../../../inc/koneksi.php';
require_once '../../../inc/includepenting.php';

    // $judulbuku = $_POST["judulbuku"];
    // $kategoribuku = $_POST["kategoribuku"];
    // $author = $_POST["author"];
    // $file_buku;
    // $sql_insert = mysqli_query($con, "INSERT INTO hlmnbuku VALUES ('$judulbuku', '$kategoribuku', '$author', '$file_buku')");
    $sumber = @$_FILES['file_buku']['tmp_name'];
	$target = 'pdf/';
	$nama_file = @$_FILES['file_buku']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){
		
		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO hlmnbuku (judulbuku,kategoribuku,author,stok,file_buku) VALUES (
        '".$_POST['judulbuku']."',
       '".$_POST['kategoribuku']."',
       '".$_POST['author']."',
       '".$_POST['stok']."',
       '".$nama_file."')";
     $query_simpan = mysqli_query($con, $sql_simpan);
     mysqli_close($con);

    if ($query_simpan){

      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = '../kelolabuku.php;
          }
      })</script>";
      header('Location: ../kelolabuku.php?status=sukses');
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {
          if (result.value) {
              window.location = '../kelolabuku.php';
          }
	  })</script>";
		}
		}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, File Buku Kosong',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = '../kelolabuku.php';
			}
		})</script>";}}
    // $sql_simpan = "INSERT INTO hlmnbuku (judulbuku,kategoribuku,author,file_buku) VALUES (
    //     '".$_POST['judulbuku']."',
    //    '".$_POST['kategoribuku']."',
    //    '".$_POST['author']."',
    //    '".$nama_file."')";
    //  $query_simpan = mysqli_query($co, $sql_simpan);
    //  mysqli_close($con);
    

    // if( $sql_simpan ) {
    //     // kalau berhasil alihkan ke halaman index.php dengan status=sukses
    //     header('Location: ../kelolabuku.php?status=sukses');
    //     // echo "berhasil";
    // } else {
    //     // kalau gagal alihkan ke halaman indek.php dengan status=gagal
    //     // header('Location: index.php?status=gagal');
    //     echo "gagal";
    // }

?>