<?php 
    require_once 'dbkoneksi.php';
?>
                
    <form method="POST" action="proses_pelanggan.php">
    <div class="form-group row">
        <label for="kode" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-anchor"></i>
            </div>
            </div> 
            <input id="kode" name="kode" type="text" class="form-control"
            value="">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-adjust"></i>
            </div>
            </div> 
            <input id="nama" name="nama" type="text" class="form-control" 
            value="">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
                
                <div class="form-check mr-1">
                    <input id="jk" name="jk" value="L" type="radio" class="form-check-input mr-2">Laki-laki
                </div>
                <div class="form-check">
                    <input id="jk" name="jk" value="P" type="radio" class="form-check-input mx-1">Perempuan
                </div>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="stok" class="col-4 col-form-label">Tempat Lahir</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-arrow-circle-up"></i>
            </div>
            </div> 
            <input id="tmp_lahir" name="tmp_lahir" value=""
            type="text" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Tanggal Lahir</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-arrow-circle-right"></i>
            </div>
            </div> 
            <input id="tgl_lahir" name="tgl_lahir" 
            value=""
            type="date" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="min_stok" class="col-4 col-form-label">Email</label> 
        <div class="col-8">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fa fa-arrow-circle-right"></i>
            </div>
            </div> 
            <input id="email" name="email" 
            value=""
            type="email" class="form-control">
        </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Kartu Id</label> 
        <div class="col-8">
            <?php 
                $sqljenis = "SELECT * FROM kartu";
                $rsjenis = $dbh->query($sqljenis);
            ?>
        <select id="kartu_id" name="kartu_id" class="custom-select">
            <?php 
                foreach($rsjenis as $rowjenis){
            ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
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
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                echo 'Update';
            } else {
                echo 'Simpan';
            } ?>" />
        </div>
    </div>
    <?php if (isset($_GET['idedit'])){ ?>
    <input type="hidden" name="idedit" value="<?php echo $_GET['idedit']; // send variable idedit ?>">
    <?php } ?>
    </form>
