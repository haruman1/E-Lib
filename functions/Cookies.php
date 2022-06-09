<?php

class CookieDoang
{
    public static function cookie_in($koneksi_db)
    {
        if (isset($_COOKIE['email']) && isset($_COOKIE['user'])) {

            $check_email = $_COOKIE['email'];
            $check_nama = $_COOKIE['nama'];

            $cookie_query = mysqli_query($koneksi_db, "SELECT * FROM 
            user WHERE email='$check_email' AND nama = '$check_nama'");

            $cookie_assoc = mysqli_fetch_assoc($cookie_query);

            $cookie_row = mysqli_num_rows($cookie_query);

            if ($cookie_row > 0) {

                if ($check_nama == $cookie_assoc['nama']) {

                    $_SESSION['id_user'] = $cookie_assoc['id_user'];
                }
            }
        }
    }
    public static function cookie_out($koneksidatabase)
    {
        if (isset($_COOKIE['email']) && isset($_COOKIE['username'])) {

            $check_email = $_COOKIE['email'];
            $check_nama = $_COOKIE['username'];

            $cookie_query = mysqli_query($koneksidatabase, "SELECT * FROM 
            user WHERE email='$check_email' AND nama = '$check_nama'");

            $cookie_assoc = mysqli_fetch_assoc($cookie_query);

            $cookie_row = mysqli_num_rows($cookie_query);

            if ($cookie_row > 0) {

                if ($check_email == $cookie_assoc['email']) {

                    $_SESSION['id_user'] = $cookie_assoc['id_user'];
                }
            }
        }
    }
}
$Cookie = new CookieDoang();
