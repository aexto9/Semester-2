	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="login_form_inner">
						<h3>Registrasi</h3>
						<form class="row login_form" action="proses_regist.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <label for="exampleInputPassword1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name='nama'>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleInputPassword1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name='username'>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputPassword1" name='email'>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name='pass'>
                            </div>

							<div class="col-md-12 form-group">
								<button type="submit" 
                                value="regist"
                                class="primary-btn" name='proses'>Log In</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->