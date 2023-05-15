<?php
require_once '../admin/dbkoneksi.php';
?>
<?php
$_tanggal = $_POST['date'];
$_nama = $_POST['nama'];
$_alamat = $_POST['alamat'];
$_hp = $_POST['hp'];
$_email = $_POST['email'];
$_jumlah_pesanan = $_POST['jumlah'];
$_Deskripsi = $_POST['desc'];
$_jenis = $_POST['produk'];


$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal ;
$ar_data[] = $_nama; // 2
$ar_data[] = $_alamat ;
$ar_data[] = $_hp ;
$ar_data[] = $_email ;
$ar_data[] = $_jumlah_pesanan ;
$ar_data[] = $_Deskripsi ;
$ar_data[] = $_jenis ;


if ($_proses == "pesan") {
   // data baru
   $sql = "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $sql = "UPDATE pesanan SET tanggal=?,nama_pemesan=?,alamat_pemesan=?,no_hp=?,email=?,jumlah_pesanan=?,deskripsi=?,produk_id=?, WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location: ../frontend/index.php?hal=terimakasih');
?>