<?php
require_once 'dbkoneksi.php';
?>
<form class="mt-4" method="POST" action="Pelanggan/proses_pelanggan.php">
  <div class="form-group row mb-2">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
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
  <div class="form-group row mb-2">
    <label for="username" class="col-4 col-form-label">Username</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="username" name="username" type="text" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="email" class="col-4 col-form-label">Email</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="email" name="email" type="email" class="form-control" value="">
      </div>
    </div>
  </div>
  <div class="form-group row mb-2">
    <label for="pass" class="col-4 col-form-label">Password</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="pass" name="pass" type="password" class="form-control" value="">
      </div>
    </div>
  </div>
  <?php 
  if (isset($_GET['idedit'])) { ?>

    <div class="form-group row mb-2">
    <label for="idedit" class="col-4 col-form-label">Kode</label>
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
        </div>
        <input id="idedit" name="idedit" type="text" class="form-control" disabled value="<?=$_GET['idedit']?>">
      </div>
    </div>
  </div>
  <?php }?>
  
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