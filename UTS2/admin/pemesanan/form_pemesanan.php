    <?php
    require_once 'dbkoneksi.php';
    ?>
    <form class="mt-4" method="POST" action="pemesanan/proses_pemesanan.php">
    <div class="form-group row mb-2">
        <label for="Tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-anchor"></i>
                        </div> -->
            </div>
            <input id="Tanggal" name="Tanggal" type="Date" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nama" class="col-4 col-form-label">Nama Pemesan</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div> -->
            </div>
            <input id="nama" name="nama" type="text" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="alamat" class="col-4 col-form-label">Alamat</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div> -->
            </div>
            <input id="alamat" name="alamat" type="text" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nohp" class="col-4 col-form-label">Nomer HP</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div> -->
            </div>
            <input id="nohp" name="nohp" type="text" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div> -->
            </div>
            <input id="email" name="email" type="email" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="jumlah" class="col-4 col-form-label">Jumlah Pesanan</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div> -->
            </div>
            <input id="jumlah" name="jumlah" type="text" class="form-control" value="">
        </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="deskripsi" class="col-4 col-form-label">deskripsi</label>
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <!-- <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div> -->
            </div>
            <input id="deskripsi" name="deskripsi" type="text" class="form-control" value="">
        </div>
        </div>
    </div>
    <?php 
    if (isset($_GET['idedit'])) { ?>
        <input id="kode" name="kode" type="hidden" class="form-control" disabled value="<?=$_GET['idedit']?>">
    <?php }?>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Produk</label>
        <div class="col-8">
        <?php
        $sqljenis = "SELECT * FROM produk";
        $rsjenis = $dbh->query($sqljenis);
        ?>
        <select id="jenis" name="jenis" class="form-select">
            <?php
            foreach ($rsjenis as $rowjenis) {
            ?>
            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
            <?php
            }
            ?>
            <!--
            <option value="1">Elektronik</option>
            <option value="2">Furniture</option>
            <option value="3">Makanan</option>-->

        </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8 pt-2">
        <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                            echo 'Update';
                                                                            } else {
                                                                            echo 'Simpan';
                                                                            } ?>" />
        </div>
    </div>
    </form>