<?php
// VARIABLE SERVER
echo $_SERVER['SERVER_NAME'];

echo "<br>";

// VARIABLE USER
$nama = "dika";
echo $nama;

echo "<br>";

$nama = "knalpot";
echo $nama;

echo "<br>";

// VARIABLE KONSTANTA

define("NAMA", "INDIKA");
echo NAMA;

echo "<br>";
const JENIS_KELAMIN = "Laki-laki";

echo JENIS_KELAMIN;

echo "<br>";

// LATIHAN VARIABLE
// PERHITUNGAN BANGUN DASAR
// LUAS PERSEGI

$sisi = 10;
$luas_persegi = $sisi * $sisi;
echo "Luas Persegi: " . $luas_persegi;
echo "<br>";
echo "luas persegi : $luas_persegi";
?>