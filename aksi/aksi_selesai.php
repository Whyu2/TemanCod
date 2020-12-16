
  <?php  

  include "../lib/koneksi.php";
  include "../lib/config.php";
$id_transaksi = $_GET['id_transaksi'];
$status = 'selesai';


    
    
    $queryedit =mysqli_query($koneksi, "UPDATE tbl_transaksi SET status='$status' WHERE id_transaksi='$id_transaksi'");

    if ($queryedit){
      echo "<script> alert ('Barang Sudah diterima,transaksi selesai '); window.location ='$admin_url'+ 'adminweb.php?module=konfirmasi_pembayaran';</script>";
  }else {
      echo "<script> alert ('Transaksi gagal disetujui');</script>";
  }





    
    

