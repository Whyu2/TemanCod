

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-12 mb-2">
				<div class="main__title">
				<h4>Konfirmasi Pembayaran </h4>
					<ul class="breadcrumb">
				
					</ul>
				</div>				
			</header>

			<div class="col-sm-6">
			<div class="row">
				<div class="col-12">
				<!-- main__box -->
				</div>

		
			
			</div><!-- row -->
			</div>

		
		

				<div class="col-12">
					<section class="content-header">
					<form class ="from-horizontal " action="../admin/module/konfirmasi_rekber/aksi_acc.php" method="POST">
					<input type="hidden" name = "status" value ="Disetujui">
					<table class= "table table-hover" " >
						<th width="150px" >Id transaksi</th>
						<th width="150px">Tanggal</th>
						<th>Foto  Bukti Pembayaran</th>
			
			
				

       				<th colspan="2">Aksi</th>
					   <?php
    include "../lib/config.php";
    include "../lib/koneksi.php";
    $kuerikonfirm=mysqli_query ($koneksi, "select * from tbl_transaksi where bukti_bayar IS NOT NULL ");
	while ($kon=mysqli_fetch_array($kuerikonfirm))

	{
		//penjual
		$id_produk =$kon['id_produk'];
		$queryp=mysqli_query ($koneksi, " SELECT * FROM tbl_produk WHERE id_produk='$id_produk'");
		$bar=mysqli_fetch_array($queryp);
		$id_userp = $bar['id_user'];

			//mnama penjual
			$querypuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userp'");
			$userp=mysqli_fetch_array($querypuser);

		//pembeli
		$id_userb =$kon['id_user'];
		$querybuser=mysqli_query ($koneksi, " SELECT * FROM tbl_user WHERE id_user='$id_userb'");
		$userb=mysqli_fetch_array($querybuser);

	

		?>
		
					<tr>
						<td><?php echo $kon['id_transaksi']; ?></td>
						<td><?php echo $kon['tgl_tansaksi']; ?></td>
						<td>  <img src="../images/bukti/<?php echo $kon['bukti_bayar'] ?>" class="img-fluid" style="width:50%" size alt="100x100" ">
							
						
						</td>

						<td>
					
		
				


					<div class ="btn-group">

					<a href ="<?php echo $admin_url; ?>module/konfirmasi_pembayaran/aksi_acc_pembayaran.php?id_transaksi=<?php echo $kon['id_transaksi']; ?>" 
					<button class="btn btn-primary">Diterima  
												</button></a>&nbsp;
												<a  href ="<?php echo $admin_url; ?>adminweb.php?module=detail_pembayaran&id_transaksi=<?php echo $kon['id_transaksi']; ?>"> <button class="btn btn-secondary">Edit
												</button></a>
										
					</div>
					</td>
					<td>
					
		
				


					<div class ="btn-group">

					<a  href ="<?php echo $admin_url; ?>adminweb.php?module=detail_pembayaran&id_transaksi=<?php echo $kon['id_transaksi']; ?>"> <button class="btn btn-secondary">Rincian
												</button></a>
										
										
					</div>
					</td>
					</tr>
					<?php 
					}?>
				
					</table>
					
					<div class = "box-footer">
						<br>

	
					</section><!-- main__box -->
				</form>
				</div>
			</div><!-- row -->
			</div>
		</div><!-- row -->
	</main>

