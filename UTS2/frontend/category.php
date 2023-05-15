	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Shop Category page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Fashon Category</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Categories</div>
					<ul class="main-categories">
						<?php
						$sql = "SELECT * FROM kategori_produk";
						$rs = $dbh->query($sql);
						foreach ($rs as $row) {
						?>
						<li class="main-nav-list"><a href=''><?=$row['nama']?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
			
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<hr>
					<hr>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
						
						//panggil data pelaanggan
						$new = new Pelanggan();
						$data = $new->dataProduk();
						//jadikan data pelanggan menjadi array

						?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/banner/1.png" alt="">
								<div class="product-details">
									<h6><?php
								
								//memanggil data satu persatu 
								//kecuali kalau ingin semua dipanggil sekaligus menggunakan looping 
								//maka sesuaikan saja tampilannya
								$data = $data[0];
								//tampilkan data pelanggan menggunakan tag h6
								echo $data['nama'];
							
								?> </h6>        
									<div class="price">
										<h6>Rp <?php
										echo $data['harga_jual'];
										?> ,00
										</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="#exampleModal" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php
						
						//panggil data pelaanggan
						$new = new Pelanggan();
						$data = $new->dataProduk();
						//jadikan data pelanggan menjadi array
						
						?>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/erigo.png" alt="">
								<div class="product-details">
									<h6><?php
								
								//memanggil data satu persatu 
								//kecuali kalau ingin semua dipanggil sekaligus menggunakan looping 
								//maka sesuaikan saja tampilannya
								$data = $data[1];
								//tampilkan data pelanggan menggunakan tag h6
								echo $data['nama'];
							
								?> </h6>        
									<div class="price">
										<h6>Rp <?php
										echo $data['harga_jual'];
										?> ,00
										</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						<?php

						//panggil data pelaanggan
						$new = new Pelanggan();
						$data = $new->dataProduk();
						//jadikan data pelanggan menjadi array

						?>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/celana1.jpg" alt="">
								<div class="product-details">
									<h6><?php
								
								//memanggil data satu persatu 
								//kecuali kalau ingin semua dipanggil sekaligus menggunakan looping 
								//maka sesuaikan saja tampilannya
								$data = $data[2];
								//tampilkan data pelanggan menggunakan tag h6
								echo $data['nama'];
							
								?> </h6>        
									<div class="price">
										<h6>Rp <?php
										echo $data['harga_jual'];
										?> ,00
										</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
				</div>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center mb-2">
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>