<?php
    require_once '../../inc/env.php';
    require_once '../../inc/koneksi.php';
    session_start();
    $_SESSION['id'] = "71";
    $id = $_SESSION['id'];
    $result = mysqli_query($con, "SELECT * FROM user WHERE id_user = $id");
    $data = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $data['username'];
    $_SESSION['status'] = $data['role'];

    
?>