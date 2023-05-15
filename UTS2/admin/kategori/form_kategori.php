<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="kategori/proses_kategori.php">
    <div class="form-group row mb-2">
        <label for="nama" class="col-4 col-form-label">Kategori</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    
    <input id="idedit" name="idedit" type="hidden" class="form-control" disabled value="<?=$_GET['idedit']?>">

    <div class="form-group row">
        <div class="offset-4 col-8 pt-2" >
        <input type="submit" name="proses" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                echo 'Update';
            } else {
                echo 'Simpan';
            } ?>" />
        </div>
    </div>
    <input type="hidden" name="idedit" value="<?php echo isset($_GET['idedit']) ? $_GET['idedit'] : ''; ?>">
</form>