	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>NEW JACKET <br>Collection!</h1>
									<p>Jaket yang sangat cocok untuk kegiatan sehari-hari!</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/1.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>NEW JACKET <br>Collection!</h1>
									<p>Jaket yang sangat cocok untuk kegiatan sehari-hari!</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/1.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->
	
	<!-- start product Area -->
	<section class="owl-carousel section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Products</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->
					<?php
						
					//panggil data pelaanggan
					$new = new Pelanggan();
					$data = $new->dataProduk();
					//jadikan data pelanggan menjadi array

					?>
					<div class="col-lg-3 col-md-6">
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
							
								?> 
								</h6>        
								<div class="price">
									<h6>Rp <?php
									echo $data['harga_jual'];
									?> ,00
									</h6>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<?php
						
					//panggil data pelaanggan
					$new = new Pelanggan();
					$data = $new->dataProduk();
					//jadikan data pelanggan menjadi array

					?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/banner/1.png" alt="">
							<div class="product-details">
								<h6><?php
								
								//memanggil data satu persatu 
								//kecuali kalau ingin semua dipanggil sekaligus menggunakan looping 
								//maka sesuaikan saja tampilannya
								$data = $data[1];
								//tampilkan data pelanggan menggunakan tag h6
								echo $data['nama'];
							
								?> 
								</h6>        
								<div class="price">
									<h6>Rp <?php
									echo $data['harga_jual'];
									?> ,00
									</h6>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<?php
						
					//panggil data pelaanggan
					$new = new Pelanggan();
					$data = $new->dataProduk();
					//jadikan data pelanggan menjadi array

					?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/banner/1.png" alt="">
							<div class="product-details">
								<h6><?php
								
								//memanggil data satu persatu 
								//kecuali kalau ingin semua dipanggil sekaligus menggunakan looping 
								//maka sesuaikan saja tampilannya
								$data = $data[2];
								//tampilkan data pelanggan menggunakan tag h6
								echo $data['nama'];
							
								?> 
								</h6>        
								<div class="price">
									<h6>Rp <?php
									echo $data['harga_jual'];
									?> ,00
									</h6>
								</div>
							</div>
						</div>
					</div>
					<!-- single product -->
					<?php
						
					//panggil data pelaanggan
					$new = new Pelanggan();
					$data = $new->dataProduk();
					//jadikan data pelanggan menjadi array

					?>
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/banner/1.png" alt="">
							<div class="product-details">
								<h6><?php
								
								//memanggil data satu persatu 
								//kecuali kalau ingin semua dipanggil sekaligus menggunakan looping 
								//maka sesuaikan saja tampilannya
								$data = $data[3];
								//tampilkan data pelanggan menggunakan tag h6
								echo $data['nama'];
							
								?> 
								</h6>        
								<div class="price">
									<h6>Rp <?php
									echo $data['harga_jual'];
									?> ,00
									</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
