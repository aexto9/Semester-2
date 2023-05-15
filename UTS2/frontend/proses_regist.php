<?php
require_once '../admin/dbkoneksi.php';
?>
<?php
$_nama = $_POST['nama'];
$_user = $_POST['username'];
$_email = $_POST['email'];
$_pass = $_POST['pass'];

$_proses = $_POST['proses'];

// array data
$ar_data[] = $_nama ;
$ar_data[] = $_user; // 2
$ar_data[] = $_email ;
$ar_data[] = $_pass ;


if ($_proses == "regist") {
   // data baru
   $sql = "INSERT INTO pelanggan (nama,username,email,password) VALUES (?,?,?,?)";
} else if ($_proses == "Update") {
   $ar_data[] = $_POST['idedit']; // ? 8
   $sql = "UPDATE pelanggan SET nama=?,username=?,email=?,password=? WHERE id=?";
}
if (isset($sql)) {
   $st = $dbh->prepare($sql);
   $st->execute($ar_data);
}

header('location: ../frontend/index.php?hal=dashboard');
?>