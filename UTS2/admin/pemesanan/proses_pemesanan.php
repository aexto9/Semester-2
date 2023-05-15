<?php
require_once '../dbkoneksi.php';
?>
<?php
$_tanggal = $_POST['Tanggal'];
$_nama = $_POST['nama'];
$_alamat = $_POST['alamat'];
$_hp = $_POST['nohp'];
$_email = $_POST['email'];
$_jumlah_pesanan = $_POST['jumlah'];
$_deskripsi = $_POST['deskripsi'];
$_jenis = $_POST['jenis'];


$_proses = $_POST['proses'];

// array data
$ar_data[] = $_tanggal;
$ar_data[] = $_nama; // 2
$ar_data[] = $_alamat;
$ar_data[] = $_hp;
$ar_data[] = $_email;
$ar_data[] = $_jumlah_pesanan;
$ar_data[] = $_deskripsi;
$ar_data[] = $_jenis;


if ($_proses == "Simpan") {
   // data baru
   $sql = "INSERT INTO pesanan (tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['kode']; // ? 8
   $sql = "UPDATE pesanan SET tanggal=?,nama_pemesan=?,alamat_pemesan=?,no_hp=?,email=?,jumlah_pesanan=?,deskripsi=?,produk_id=?, WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location: ../index.php?hal=pemesanan/pemesanan');
?>