<?php
session_start();
if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
    echo"<center > untuk mengakses modul ini andha harus login<br>";
    echo"<a href =../../index.php><b>LOGIN</b></a></center>";
} else {
    include "../lib/config.php";
    include "../lib/koneksi.php";

    $id_konfirmasi  = $_GET['id_konfirmasi'];
  
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_konfirmasi  WHERE id_konfirmasi='$id_konfirmasi'");
 

    if ($queryHapus){
        // echo "<script> alert ('Data Kabupaten Berhasil dihapus'); window.location ='pembelian.php?id_user =  ';</script>";
    }else {
        // echo "<script> alert ('Data Kabupaten gagal dihapus'); window.location ='$admin_url'+ 'adminweb.php?module=kabupaten';</script>";
    }
}
    ?>