<?php 
///batas edit
    require_once 'dbkoneksi.php';
?>
<?php 
    $sql = "SELECT * FROM produk";
    $rs = $dbh->query($sql);
?>
                    <hr>
                    <h1 class='m-3'>Tabel Produk</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                <a class="btn btn-success" href="index.php?hal=form_pelanggan" role="button">tambahkan Pelanggan</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Stok</th>
                                        <th>Min. Stok</th>
                                        <th>Jenis Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Stok</th>
                                        <th>Min. Stok</th>
                                        <th>Jenis Produk</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                </tfoot>
                                <tbody>
                                    <?php 
                                    $nomor  =1 ;
                                    foreach($rs as $row){
                                    ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$row['kode']?></td>
                                            <td><?=$row['nama']?></td>
                                            <td><?=$row['harga_jual']?></td>
                                            <td><?=$row['harga_beli']?></td>
                                            <td><?=$row['stok']?></td>
                                            <td><?=$row['min_stok']?></td>
                                            <td><?=$row['jenis_produk_id']?></td>
                                            <td>
                                            <a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
                                            <a class="btn btn-primary" href="form_produk.php?idedit=<?=$row['id']?>">Edit</a>
                                            <a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
                                            onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
                                            >Delete</a>
                                            </td>
                                        </tr>
                                    <?php 
                                    $nomor++;   
                                    } 
                                    ?>
                                </tbody>
                                
                                </table>
                            </div>
                        </div>