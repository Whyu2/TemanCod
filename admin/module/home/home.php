

	<!-- main -->
	<main class="main main--ml-sidebar-width">
		<div class="row">
			<header class="main__header col-md-12 mb-2">
				<div class="main__title">
					<h4>Dashboard</h4>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ul>
				</div>				
			</header>

			<!-- info box -->
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--blue">
					<div class="info-box__icon"><span class="fa fa-shopping-cart"></span></div>
					<div class="info-box__description">
						<h2>Produk</h2>
						<h1><?= $jumlahProduk; ?></h1>
						<time>12 Minutes ago</time>
					</div>
					<a title="Detail Products" class="info-box__btn-detail" href=""><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--orange">
					<div class="info-box__icon"><span class="fa fa-mobile-phone"></span></div>
					<div class="info-box__description">
						<h2>Brand</h2>
						<h1><?= $jumlahbrand; ?></h1>
						<time>2 Minutes ago</time>
					</div>
					<a title="Detail Orders" class="info-box__btn-detail" href=""><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>
			<div class="mb-3 col-md-6 col-lg-4">
				<section class="info-box info-box--green">
					<div class="info-box__icon"><span class="fa fa-users"></span></div>
					<div class="info-box__description">
						<h2>User</h2>
						<h1><?= $jumlahuser; ?></h1>
						<time>30 Minutes ago</time>
					</div>
					<a title="Detail Members" class="info-box__btn-detail" href=""><span class="fa fa-arrow-right"></span></a>
				</section>
			</div>

		

			<!-- charts -->
		

			<!-- table -->
		
		</div><!-- row -->
	</main>

	<!-- footer -->
	