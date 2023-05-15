<?php
include_once '../admin/dbkoneksi.php';
include_once '../model/Pelanggan.php';
include_once 'header.php';
?>

<?php
error_reporting(0);
$hal = $_GET['hal'];
if($hal == 'dashboard.php'){
	include_once 'dashboard.php';
} else if( !empty($hal)){
	include_once '' .$hal.'.php';
} else {
	include_once 'dashboard.php';
}
?>

<?php
include_once 'footer.php';
?>