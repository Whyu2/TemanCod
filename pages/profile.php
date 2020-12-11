<?php

include "lib/koneksi.php";


  $id_user = $_GET ['id_user'];
  $queryuser = mysqli_query ($koneksi, "select * from tbl_user WHERE id_user = '$id_user'");
  $hasilQuery = mysqli_fetch_array($queryuser);
  $id_user = $hasilQuery ['id_user'];
  $id_kabupaten = $hasilQuery ['id_kabupaten'];
  $level = $hasilQuery ['level'];

  $foto = $hasilQuery ['fotop'];
  $username = $hasilQuery ['username'];
  $tlp = $hasilQuery ['notlp'];
  $detail_alamat = $hasilQuery ['detail_alamat'];
  $nama = $hasilQuery ['nama_lengkap'];
  $email = $hasilQuery ['email'];
  $password = $hasilQuery ['password'];
  $fotop = $hasilQuery ['fotop'];
  $querykab = mysqli_query ($koneksi, "select * from tbl_kabupaten WHERE id_kabupaten = '$id_kabupaten'");
  $hasilQuerykab = mysqli_fetch_array($querykab);
  $nama_kabupaten = $hasilQuerykab ['nama_kabupaten'];
?>
<div class="col-12">
                <!-- Main Content -->
                <main class="row">
                    <div class="col-12 bg-white py-3 my-3">
                        <div class="row">

                            <!-- Product Images -->
                            <div class=" py-1 my-1 col-lg-3 col-md-5 mb-3 ">
                                <div class="col-15 mb-3 ">
                                <img class="rounded-circle  mx-auto" width="100%" src="images/foto_profile/<?= $foto; ?>"
                                     data-holder-rendered="true">
                                </div>
                                <div class="col-12">  
                                
                                <?php

                            include "lib/koneksi.php";

                            if(empty($_SESSION['username']) and empty($_SESSION['password'])) {     ?>     

                            <?php }
                
                 elseif($_SESSION['username'] == $hasilQuery ['username'] ) {   ?>     

                 
                    <div>
                    <a class="btn btn-primary btn-lg btn-block" href="edit_profile.php?id_user= <?= $id_user; ?>" role="button"><b>Edit Profile</b></a>
                    <a class="btn btn-primary btn-lg btn-block" href="pembelian.php?id_user= <?= $id_user; ?>" role="button"><b>Pembelian</b></a>
                    <a class="btn btn-primary btn-lg btn-block" href="transaksi.php?id_user= <?= $id_user; ?>" role="button"><b>Transaksi</b></a>
                    </div>
                

                <?php  } ?>   


                                <!-- <div>
                                <a class=
                                 "btn btn-secondary btn-lg btn-block" href="edit_profile.php?id_user= <?= $id_user; ?>" role="button">Edit Profile</a>
    </div> -->

    <br>
 

    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/ios-glyphs/20/000000/user-male.png" style="float:left; margin:0 8px 4px 0;" /><p class="h6"><b><?= $username; ?></b></p></div>
    <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/metro/20/000000/phone.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $tlp; ?></b></div>
        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/fluent-systems-regular/20/000000/email.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $email; ?></b></div>
        <div style="text-align:justify;width:75%;  padding:8px;"><img src="https://img.icons8.com/material/20/000000/worldwide-location--v1.png" style="float:left; margin:0 8px 4px 0;" /><b><?= $nama_kabupaten; ?></b></div>


                                </div>
                                <br>
                                <div class="col-12">  
                              


 
                                </div>
          
                            </div>
                            
                            <!-- Product Images -->

                            <!-- Product Info -->
                            <div class="col-lg-8 col-md-9">
                                <div class="col-10 product-name large">
                                 <?= $nama; ?>
                                    <small class="text-primary" >Bergabung tanggal <?= date('M d, y', strtotime($hasilQuery['tgl_gabung'])); ?></small>
                                </div>
                                <div class="col-12 px-0">
                                    <hr>
                                </div>
                                <div class="col-12">
                        
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                  
                                </div>
                                <?php 
                                if ($level == 'pembeli') {  ?>



                  <?php 
                                } else {      ?>
                              
                          
                                
                           


                                <div class="row">
                           
                                
                                <?php 
                                                    $queryproduk = mysqli_query ($koneksi, "select * from tbl_produk WHERE id_user = '$id_user'" );
                                                    while ($hasilquery = mysqli_fetch_array ($queryproduk)){
                                                        ?>
                                            <div class="col-lg-3 col-sm-6 my-3">
                                                    <div class="col-12 bg-white text-center h-100 product-item">
                                                        <div class="row h-100">
                                                            <div class="col-12 p-0 mb-3">
                                                                <a href="produk.php?id_produk= <?= $hasilquery['id_produk']; ?>"> 
                                                                <img  src="images/produk/<?php echo $hasilquery['gambar1']?>" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <a href="product.html" 
                                                                class="product-name"><?= $hasilquery['nama_p']; ?></a>
                                                            </div>
                                                            <div class="col-12 mb-3">
                                                                <span class="product-price-old">
                                                                
                                                                </span>
                                                                <br>
                                                                <span class="product-price">
                                                                Rp 5.000.000
                                                                </span>
                                                            </div>
                                                            <div class="col-12 mb-3 align-self-end">
                                                                <button class="btn btn-outline-primary" type="button"><i class=" mr-2"></i>Lihat Detail</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <?php } ?>
                                                <?php

                                                    include "lib/koneksi.php";

                                                    if(empty($_SESSION['username']) and empty($_SESSION['password'])) {     ?>     

                                                    <?php }

                                                    elseif($_SESSION['username'] == $hasilQuery ['username'] ) {   ?>     


<div class="col-lg-30 col-sm-6 my-3  ">
                                        <div class="col-6  bg-secondary text-white  text-center h-100 product-item ">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3  ">
                                                 
                                                </div>
                                                <div class="col-12 mb-3 ">
                                                    <h3>Pasang iklan ?</strong></h3>
                                                </div>
                                                <div class="col-12 mb-3">
                                                  
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <a   href="tambah_produk.php" class="btn btn-outline-light" type="button"><i class="fas fa-cart-plus mr-2"></i>Pasang Iklan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


<?php  } ?>   
                                          
                           



                                   
                                           <!-- Product   Disable--> 
<!--                                           
                                    <div class="col-lg-30 col-sm-6 my-3 mx-auto ">
                                        <div class="col-20  bg-secondary text-white  text-center h-100 product-item ">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3  ">
                                                 
                                                </div>
                                                <div class="col-12 mb-3 ">
                                                    <h3>Belum Ada Iklan Di Pasang |  Pasang Iklan ?</strong></h3>
                                                </div>
                                                <div class="col-12 mb-3">
                                                  
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <a   href="tambah_produk.php" class="btn btn-outline-light" type="button"><i class="fas fa-cart-plus mr-2"></i>Pasang Iklan</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->


                                    <!-- Bila produk kosong -->
                                    <!-- <div class="col-12 text-center text-uppercase">
                                        <h2><strong>Produk Yang Dijual</strong></h2>
                                    </div> -->
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
                                    </div> 
                                    <div class="col-lg-3 col-sm-6 my-3">
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
                                    </div> 
                              

                  
                                    <div class="col-lg-3 col-sm-6 my-3">
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
                                    </div>
                          

                                    
                                    <div class="col-lg-3 col-sm-6 my-3">
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

                       
                           

                        
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    
                                                    <?php } ?>
                            <!-- Product Info -->

                            <!-- Sidebar -->
                            <!-- <div class="col-lg-20 col-md-3 text-center">
                                <div class="col-12 border-left border-top sidebar h-100">
                                    <div class="row">
                                        <div class="col-12">
                                 
                                    
                                     
                                        <div class="col-12 mt-3">
                                            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-heart mr-2"></i>Follow</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Sidebar -->

              
<!-- 
                    <div class="col-12 mb-3 py-3 bg-white text-justify">
                        <div class="row">

                 
                            Details

                            Ratings & Reviews
                       
                            Ratings & Reviews

                        </div>
                    </div> -->

                    <!-- Similar Product -->
                    <!-- <div class="col-12">
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-center text-uppercase">
                                        <h2>Produk Yang Dijual</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    

                                           Product   Disable 
                                          
                                    <div class="col-lg-3 col-sm-6 my-3 mx-auto ">
                                        <div class="col-20  bg-white text-center h-100 product-item ">
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3 ">
                                                 
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="product.html" class="product-name">Anda belum memasang iklan</a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                  
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus mr-2"></i>Pasang Iklan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             
                                    <div class="col-lg-3 col-sm-6 my-3">
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
                                    </div> 
                              

                  
                                    <div class="col-lg-3 col-sm-6 my-3">
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
                                    </div>
                          

                                    
                                    <div class="col-lg-3 col-sm-6 my-3">
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
                                    </div>
                           

                        
                                    <div class="col-lg-3 col-sm-6 my-3">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </main>               <!-- Main Content -->
            </div>