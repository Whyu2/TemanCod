<div class="col-12">
                <!-- Main Content -->
                <main class="row">
                    <div class="col-10 bg-white py-3 my-3 mx-auto">
                        <div class="row">

                            <!-- Product Images -->
                            <div class="col-lg-3 col-md-10 mb-3">
                            <form method="post" action="aksi/aksi_tambahp.php"  enctype="multipart/form-data" id="mainform">
                            <input type="hidden" name="id_user" value="<?= $id_user_session; ?>">
                            <h4><strong>Detail Foto Produk</strong></h4>
                                <div class="col-12 mb-3">
                                <p><strong> Foto 1</strong></p>
                                <img id="preview-img1" src="https://img.icons8.com/material-outlined/100/000000/image.png" alt="..." class="rounded float-left  " style="width: 200px; ">
                                <div class="custom-file">
            
                                    <input type="file" class="imgFile  custom-file-input" id="img1" name="img1">
                                    
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                   
                                    </div>  
                                                    
                                </div>

                                <div class="col-12 mb-3">
                                <p><strong> Foto 2</strong></p>
                                <img id="preview-img2" src="https://img.icons8.com/material-outlined/100/000000/image.png" alt="..." class="rounded float-left  " style="width: 200px; ">
                                <div class="custom-file">
            
                                   
                                <input type="file" class="imgFile  custom-file-input" id="img2" name="img2">
                                    
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                   
                                    </div>  
                                                    
                                </div>

                                <div class="col-12 mb-3">
                                <p><strong> Foto 3</strong></p>
                                <img id="preview-img3" src="https://img.icons8.com/material-outlined/100/000000/image.png" alt="..." class="rounded float-left  " style="width: 200px; ">
                                <div class="custom-file">
            
                                <input type="file" class="imgFile  custom-file-input" id="img3" name="img3">
                                    
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                   
                                    </div>  
                                                    
                                </div>
                               
                          
                              
                            </div>
                            <!-- Product Images -->

                            <!-- Product Info -->
                            <div class="col-lg-9 col-md-9">
                                <div class="col-12 ">
                                <h4><strong> Deskrpsi Produk</strong></h4>
                                <hr>
                                </div>
                                    <div class="col-md-10">
                                <div class="control-group form-group">
                    
                                    <div class="controls">
                                        <label><strong>Nama Handphone</strong></label>
                                        <input type="text" class="form-control" name="namap" placeholder="Nama Handphone" value="" >
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Brand</strong></label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="brand">
                                        <option>-- Pilih Brands --</option>
                                        <?php
                                        $sql_brand = mysqli_query($koneksi, "SELECT * FROM tbl_brand");
                                        while ($kb = (mysqli_fetch_array($sql_brand))) {
                                        ?>
                                            <option value="<?= $kb['id_brand']; ?>"><?= $kb['nama_brand']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Harga (Harga sudah termasuk ongkir)</strong></label>
                                        <input type="text" class="form-control" name="harga" placeholder="harga" value="">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                    <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Layar</strong></label>
                                        <input type="text" class="form-control" name="layar" placeholder="Layar" value="">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Cpu (Prosessor)</strong></label>
                                        <input type="text" class="form-control" name="cpu" placeholder="Cpu (Prosessor)" value="">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Kamera</strong></label>
                                        <input type="text" class="form-control" name="kamera" placeholder="Kamera" value="">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Battery</strong></label>
                                        <input rows="10" cols="100" class="form-control" id="battrey" name="battrey" placeholder="Battrey" value="">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Lama Pemakaian</strong></label>
                                        <input rows="10" cols="100" class="form-control" id="pemakaian" name="pemakaian" placeholder="Lama Pemakaian" value="">
                                        <p class="help-block"></p>
                                    </div>
                                 </div>
                                 <div class="control-group form-group">
                                    <div class="controls">
                                        <label><strong>Detail Lain</strong></label>
                                        <textarea rows="10" cols="100" class="form-control" id="detailp" name="detailp" placeholder="Detail Produk" value="">

                                        </textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <button type="button" class="btn btn-secondary">Batal</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                 </div>
                                 
                                    </div>



                                </div>
                               
                                </div>
                                    </form>
                            </div>
                            <!-- Product Info -->

                            <!-- Sidebar -->
                      
                            <!-- Sidebar -->

                        </div>
                    </div>

               

                    <!-- Similar Product -->
            
                    <!-- Similar Products -->

          

                </main>
                        </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
     function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                imgId = '#preview-'+$(input).attr('id');
                $(imgId).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
      }


      $("form#mainform input[type='file']").change(function(){
        readURL(this);
      });

</script>