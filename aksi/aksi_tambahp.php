<?php
include "../lib/koneksi.php";


$id_user = $_POST['id_user'];
$brand = $_POST['brand'];
$harga = $_POST['harga'];
$nama_produk = $_POST['namap'];
$layar = $_POST['layar'];
$cpu = $_POST['cpu'];
$kamera = $_POST['kamera'];
$battrey = $_POST['battrey'];
$pemakaian = $_POST['pemakaian'];
$detailp = $_POST['detailp'];
$tgl_post = date('Y-m-d');


$img1 = $_FILES['img1'] ['name'];
$tmp_file_img1 = $_FILES ['img1'] ['tmp_name'];
$path_img1 = "../images/produk/".$img1; 
move_uploaded_file($tmp_file_img1, $path_img1);

$img2 = $_FILES['img2'] ['name'];
$tmp_file_img2 = $_FILES ['img2'] ['tmp_name'];
$path_img2 = "../images/produk/".$img2; 
move_uploaded_file($tmp_file_img2, $path_img2);

$img3 = $_FILES['img3'] ['name'];
$tmp_file_img3 = $_FILES ['img3'] ['tmp_name'];
$path_img3 = "../images/produk/".$img3; 
move_uploaded_file($tmp_file_img3, $path_img3);



$query = mysqli_query($koneksi, "INSERT INTO tbl_produk (id_user,id_brand,harga,nama_p,layar,cpu,kamera,battrey,lama_pemakaian,gambar1,gambar2,gambar3,detail,tgl_post) VALUES
 ('$id_user','$brand','$harga','$nama_produk','$layar','$cpu','$kamera','$battrey','$pemakaian','$img1','$img2','$img3','$detailp','$tgl_post')");


    if ($query) {
        echo    "<script>alert
        alert('Produk berhasil di posting'); 
        window.location = '../index.php#modalr';
        </script>";
    } else {
        echo    "<script>
        alert('Produk berhasil di posting'); 
                    ('Data Gagal Dimasukkan');
                    window.location = '../index.php#modalr';
                    </script>";
    }

