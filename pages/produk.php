<?php

include "lib/koneksi.php";


  $id_produk = $_GET ['id_produk'];
  $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk WHERE id_produk = '$id_produk'");
  $hasilQuery = mysqli_fetch_array($queryproduk);
  $id_user = $hasilQuery ['id_user'];
  $id_brand = $hasilQuery ['id_brand'];
  $nama_produk = $hasilQuery ['nama_p'];
  $layar = $hasilQuery ['layar'];
  $cpu = $hasilQuery ['cpu'];
  $kamera = $hasilQuery ['kamera'];
  $battrey = $hasilQuery ['battrey'];
  $lama_pemakaian = $hasilQuery ['lama_pemakaian'];
  $gambar1 = $hasilQuery ['gambar1'];
  $gambar2 = $hasilQuery ['gambar2'];
  $gambar3 = $hasilQuery ['gambar3'];
  $detail = $hasilQuery ['detail'];
  $tgl_post = $hasilQuery ['tgl_post'];

  $queryu = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user'");
  $hasilQueryu = mysqli_fetch_array($queryu);
  $nama = $hasilQueryu ['nama_lengkap'];

  $fotop = $hasilQueryu ['fotop'];
  $idkab = $hasilQueryu ['id_kabupaten'];
  $querkab = mysqli_query ($koneksi, "select * from tbl_kabupaten WHERE id_kabupaten = '$idkab'");
  $hasilQuerkab = mysqli_fetch_array($querkab);
  $nama_kabupaten = $hasilQuerkab ['nama_kabupaten'];
  $tlp = $hasilQueryu ['notlp'];

?>

<div class="col-12">
                <!-- Main Content -->
                <main class="row">
                    <div class="col-12 bg-white py-3 my-3">
                        <div class="row">

                            <!-- Product Images -->
                            <div class="col-lg-5 col-md-12 mb-3">
                                <div class="col-12 mb-3">
                                    <div class="img-large border" style="background-image: url('images/produk/<?= $gambar1; ?>')"></div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-sm-2 col-3">
                                            <div class="img-small border" style="background-image: url('images/produk/<?= $gambar1; ?>')" data-src="images/produk/<?= $gambar1; ?>"></div>
                                        </div>
                                        <div class="col-sm-2 col-3">
                                        <div class="img-small border" style="background-image: url('images/produk/<?= $gambar2; ?>')" data-src="images/produk/<?= $gambar2; ?>"></div>
                                        </div>
                                        <div class="col-sm-2 col-3">
                                        <div class="img-small border" style="background-image: url('images/produk/<?= $gambar3; ?>')" data-src="images/produk/<?= $gambar3; ?>"></div>
                                        </div>
                                        <?php
                        if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
                           echo "<script> window.location ='produk.php?id_produk='$id_produk';</script> <h4>Silahkan Login Untuk transaksi </h4>";
                        } else { 

                        

                        $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user_session'");
                        $hasilQueryuser = mysqli_fetch_array($queryuser);
                        $level =    $hasilQueryuser['level'];                      
                     ?>

<?php



if($level == 'penjual' ) {   ?>     
     

<?php }

else {   ?>   
<br>  
     <button   type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalt"><i class="fas fa-cart-plus mr-2"></i><h5><b>Transaksi dengan rekber ?</b></h5></button>      <?php } ?>
<?php  } ?>  
                                      
                                    </div>
                                </div>
                            </div>
                            

                            <!-- Product Images -->

                            <!-- Product Info -->
                            <div class="col-lg-5 col-md-9">
                                <div class="col-12 product-name large">
                                    <?= $nama_produk; ?>
                                    <small>Dipost Oleh   : <a href="#"> <?= $nama; ?></a></small>
                                    <small>Tanggal Post: <a href="#"> <?= $tgl_post; ?></a></small>
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                                <h4><b>Spesifikasi</b></h4>
                                                           
                                    <div style="text-align:justify;width:100%;  padding:8px;"><img src="https://img.icons8.com/ios-filled/40/000000/rotate-screen.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><p class="h4"><?= $layar; ?></p></div>
                                    <div style="text-align:justify;width:100%;  padding:8px;"><img src="https://img.icons8.com/ios/40/000000/smartphone-cpu.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><p class="h4"><?= $cpu; ?></p></div>
                                        <div style="text-align:justify;width:100%;  padding:8px;"><img src="https://img.icons8.com/ios/40/000000/integrated-webcam.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><p class="h4"><?= $kamera; ?></p></div>
                                            <div style="text-align:justify;width:100%;  padding:8px;"><img src="https://img.icons8.com/ios-glyphs/40/000000/battery.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><p class="h4"><?= $battrey; ?></p></div>
                                                <h4>Harga :<p class="text-secondary"><strong> <?php $format_angka = number_format($hasilQuery['harga'], "0", ".", ".");
                                              echo "Rp.".$format_angka;?> </h4></strong></p> </h4>
                   
                                </div>
                            </div>
                            <!-- Product Info -->

                            <!-- Sidebar -->
                            <div class="col-lg-2 col-md-3 text-center">
                                <div class="col-15 border-left border-top sidebar h-100">
                                    <div class="row">
                               
                                        <div class="col-12">
                                        <p class="h3">
                                            Penjual
                                        </p>
                                        <span class="detail-price">
                                        <img class="rounded-circle" suze alt="100x100" style="width:80%" src="images/foto_profile/<?= $fotop; ?>"
                                     data-holder-rendered="true">
                                     <hr>
                                     <p class="h4">
                                            <?= $nama; ?>
                                        </p>
                                     
                                        </div>
                           
                                        <div class="col-12 mt-30 center">
                                            
                                        <a href="profile.php?id_user=  <?=$id_user?> " class="btn btn-primary   fas fa-store btn-lg btn-block" aria-hidden="true" role="button">  Profile </a>
                                        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/material/20/000000/worldwide-location--v1.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $nama_kabupaten; ?></b></div>
                                            <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/metro/20/000000/phone.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $tlp; ?></b></div>
                                        </div>
                                        <!-- <div class="col-12 mt-3">
                                        <a href="profile.php" class="btn btn-secondary   far fa-comment-dots" aria-hidden="true" role="button"> Chat Penjual</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar -->

                        </div>
                    </div>

                    <div class="col-12 mb-3 py-3 bg-white text-justify">
                        <div class="row">

                            <!-- Details -->
                            <div class="col-md-7">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 text-uppercase">
                                            <h4><b>Detail Produk</b></h4>
                                        </div>
                                        <div class="col-12" id="details">
                                       

                                            <p><?= $detail; ?></p>
                                          

                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Details -->

                            <!-- Ratings & Reviews -->
                            <div class="col-md-5">
                                <div class="col-12 px-md-4 border-top border-left sidebar h-100">

                                    <!-- Rating -->
                                  
                                    <!-- Rating -->

                                    <div class="row">
                                        <div class="col-12 px-md-3 px-0">
                                            <hr>
                                        </div>
                                    </div>

                                    <!-- Add Review -->
                                    <div class="row">
                                        <div class="col-12">
                                            <h4>Komentar</h4>
                                        </div>
                                        <div class="col-12">
                                        
                                                <?php
                        if (empty($_SESSION['username'])AND empty ($_SESSION['passuser'])) {
                           echo "<script> window.location ='produk.php?id_produk='$id_produk';</script> <h4>Silahkan Login Untuk komen </h4>";
                        } else { 

                        

                        $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user_session'");
                        $hasilQueryuser = mysqli_fetch_array($queryuser);
                       
                     ?>
                         <form action="aksi/aksi_komen.php" method="POST">
                         <input type="hidden" name = "id_produk" value ="<?php echo $id_produk ?>">
                              <input type="hidden" name = "id_user" value ="<?php echo $hasilQueryuser ['id_user'] ?>">
                                                <div class="form-group">
                                                    <textarea class="form-control" name = "komen" placeholder="Masukkan Komentar"></textarea>
                                                </div>
                                         
                                                <div class="form-group">

                                                    <button class="btn btn-outline-dark">Post Komen</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                       <?php } ?>
                                    <!-- Add Review -->

                                    <div class="row">
                                        <div class="col-12 px-md-3 px-0">
                                            <hr>
                                        </div>
                                    </div>

                                    <!-- Review -->
                                    <div class="row">
                                        <div class="col-12">
                                        <?php 
           
                        $komen = mysqli_query ($koneksi, "select * from tbl_komen where id_produk = '$id_produk'" );
                        while ($hasilkomen = mysqli_fetch_array ($komen)){
                              ?>
                                <?php
                              	$id_user = $hasilkomen['id_user'];
                              $user = mysqli_query ($koneksi, "select * from tbl_user where id_user = '$id_user'" );
                              $hasiluser = mysqli_fetch_array ($user);
                              $username = $hasiluser ['username'];
                           

                              ?>
                                            <!-- Comments -->
                                            <div class="col-12 text-justify py-2 mb-3 bg-gray">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <strong class="mr-2"><?= $username; ?></strong>
                                                    </div>
                                                    <div class="col-12">
                                                        
                                                    <?php echo $hasilkomen ['isi_komen']; ?>
                                                    </div>
                                                    <div class="col-12">
                                                        <small>
                                                            <i class="fas fa-clock mr-2"></i><?php echo $hasilkomen ['tgl_komen']; ?>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <!-- Comments -->

                                            <!-- Comments -->
                                          
                                            <!-- Comments -->

                                        </div>
                                    </div>
                                    <!-- Review -->

                                </div>
                            </div>
                            <!-- Ratings & Reviews -->

                        </div>
                    </div>

                    <!-- Similar Product -->
                    <!-- <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-center text-uppercase">
                                        <h2>Similar Products</h2>
                                    </div>
                                </div>
                                <div class="row"> -->

                                    <!-- Product -->
                                    <!-- <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="product.html">
                                                        <img src="images/image-1.jpg" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="product.html" class="product-name">Sony Alpha DSLR Camera</a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <span class="product-price-old">
                                                        $500
                                                    </span>
                                                    <br>
                                                    <span class="product-price">
                                                        $500
                                                    </span>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Product -->

                                    <!-- Product -->
                                    <!-- <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="product.html">
                                                        <img src="images/image-2.jpg" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="product.html" class="product-name">Optoma 4K HDR Projector</a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <span class="product-price">
                                                        $1,500
                                                    </span>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Product -->

                                    <!-- Product -->
                                    <!-- <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="product.html">
                                                        <img src="images/image-3.jpg" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="product.html" class="product-name">HP Envy Specter 360</a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="product-price-old">
                                                        $2,800
                                                    </div>
                                                    <span class="product-price">
                                                        $2,500
                                                    </span>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Product -->

                                    <!-- Product -->
                                    <!-- <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="product.html">
                                                        <img src="images/image-4.jpg" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="product.html" class="product-name">Dell Alienware Area 51</a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <span class="product-price">
                                                        $4,500
                                                    </span>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- Product -->
<!-- 
                                </div>
                            </div>
                        </div>
                        
                    </div> -->
                    <!-- Similar Products -->

          

                </main>
                <!-- Main Content -->
            </div>

            <div class="modal fade" id="modalt" role="dialog" arialabelledby = "modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-tittle">Syarat Dan Ketentuan</h3>
                                                                <button type="button" class="close" data-dismiss = "modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                        <div class="col-sm-15">
                    
                                                        <div class="row">
                                                            <div class="col-12">
                                                            <h4>Cara kerja (Rekber) rekening bersama:</h4>
                                                                    <ol>
                                                                        <li>Pembeli dan penjual sepakat menggunakan rekber</li>
                                                                        <li>Pembeli transfer dana ke rekening bersama
                                                                </li>
                                                                        <li>Konfirmasi dana masuk ke rekening bersama</li>
                                                                        <li>Admin akan mengkonfirmasi dana sudah masuk dan meminta penjual untuk segera mengirim barang</li>
                                                                        <li>Penjual kirim barang</li>
                                                                        <li>Pembeli konfirmasi penerimaan barang</li>
                                                                        <li>Rekening bersama transfer dana ke penjual</li>
                                                                        <li>Penjual konfirmasi dana masuk</li>

                                                                    </ol>
                                                                    <h4>Syarat Dan Ketentuan</h4>
                                                            <ol>  <li>Setiap transaksi dengan menggunakan rekber hanya dapat dilakukan untuk 1 produk
                                                             </li>
                                                                <li>Admin tidak bertanggung jawab untuk garansi produk</li>
                                                                <li>Segala bentuk penipuan harap dilaporkan ke pihak berwajib
                                                             </li>
                                                        

                                                            </ol>
                                                            <a href="konfirm.php?id_produk=  <?= $id_produk?> " class="btn btn-danger   fas fa-arrow-circle-right " aria-hidden="true" role="button"><b>  lanjutkan Transaksi</b></a>
                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                   
                                        </header>
                                    </div>
           
            

            <script>
  $(document).ready(function(){
   
   function load_unseen_notification(view = '')
   {
    $.ajax({
     url:"fetch.php",
     method:"POST",
     data:{view:view},
     dataType:"json",
     success:function(data)
     {
      $('.dropdown-menu').html(data.notification);
      if(data.unseen_notification > 0)
      {
       $('.count').html(data.unseen_notification);
     }
   }
 });
  }
  
  load_unseen_notification();
  
  $('#comment_form').on('submit', function(event){
    event.preventDefault();
    if($('#subject').val() != '' && $('#comment').val() != '')
    {
     var form_data = $(this).serialize();
     $.ajax({
      url:"insert.php",
      method:"POST",
      data:form_data,
      success:function(data)
      {
       $('#comment_form')[0].reset();
       load_unseen_notification();
     }
   });
   }
   else
   {
     alert("Both Fields are Required");
   }
 });
  
  $(document).on('click', '.dropdown-toggle', function(){
    $('.count').html('');
    load_unseen_notification('yes');
  });
  
  setInterval(function(){ 
    load_unseen_notification();; 
  }, 5000);
  
});
</script>