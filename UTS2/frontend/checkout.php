    <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Pemesanan</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<p>Pemesanan</p>
					</nav>
				</div>
			</div>
		</div>
	</section>
    
    <section>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h1 class="display-5 fw-bold" >PEMESANAN</h1>
            </div>

            <div class="col-md-12 col-lg-12">
                <form class="row login_form" action='proses_pemesanan.php' method='POST'>
                    <div class="col-md-12 form-group">
						<input type="date" class="form-control" id="date" name="date" placeholder="Tanggal" required>
					</div>
					<div class="col-md-12 form-group">
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pemesanan" required>
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Pemesan" required>
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="hp" name="hp" placeholder="Nomer HP" required>
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
                    <div class="col-md-12 form-group">
                        <select name="produk" id="produk" class="form-select">
                             <?php
                            $sqljenis = "SELECT * FROM produk";
                            $rsjenis = $dbh->query($sqljenis);
                            
                            foreach ($rsjenis as $rowjenis){
                            ?>
                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                            <?php } ?>    
                        </select>
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Pesanan" required>
					</div>
                    <div class="col-md-12 form-group">
						<input type="text" class="form-control" id="desc" name="desc" placeholder="Deskripsi" required>
					</div>
					<div class="col-md-12 form-group">
						<button type="submit" name='proses' class="primary-btn" value='pesan'>Pesan</button>
					</div>
                </form>
            </div>

        </main>
    </div>
    </section>