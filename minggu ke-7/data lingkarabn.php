<?php
require_once 'class_lingkran.php';
echo 'Nilai PHI = '.lingkaran::PHI;

$lingkaran1 = new Lingkaran (10);
$lingkaran2 = new Lingkaran (4);

echo "<br/>Luas Lingkaran 1 ".$lingkaran1 -> getluas();

?>