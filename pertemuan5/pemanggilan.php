<?php
require_once('lingkaran.php');
require_once('persegipanjang.php');
$lingkaran1 = new Lingkaran(11);
echo "Luas lingkaran tersebut Adalah" . $lingkaran1->luas();
echo "<br>";
$lingkaran1->keliling();
echo "<br>";

$panjang = new PersegiPanjang(30);
echo "Luas Persegi Panjang tersebut Adalah" . $panjang->luas();
echo "<br>";
echo "Keliling Persegi Panjang Tersebut Adalah" . $panjang->keliling();
?>
