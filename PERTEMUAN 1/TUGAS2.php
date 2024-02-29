<?php
$ar_array = array("budi", "andi", "caca");
$ar_array2 = ["budi", "andi", "caca"];
print_r($ar_array);
echo "<br>";
echo $ar_array[2];
echo "<br>";
foreach ($ar_array as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

foreach ($ar_array2 as $row) {
    echo $row . "<br>";
}

echo "jumlah data dalam array adalah" . count($ar_array);
echo "<br>";

//MENAMBAHKAN ARRAY 
$ar_array[] = "PUTRA";
// MENGHAPUS ARRAY
// unset($ar_array[1]);
print_r($ar_array);
echo "<br>";
// MENGURUTKAN ARRAY
sort($ar_array);
print_r($ar_array);
echo "<br>";
// MENGHAPUS ARRAY TERAKHIR
array_pop($ar_array);
print_r($ar_array);

echo "<br>";
// MENAMBAHKAN ARRAY MENGGUNAKAN PUSH
array_push($ar_array, "DIKA");
print_r($ar_array);

echo "<br>";
// FUNCTION SHIFT UNTUK MENGHAPUS VALUE ARRAY PERTAMA
array_shift($ar_array);
print_r($ar_array);

echo "<br>";
// UNSHIFT UNTUK MENAMBAHKAN ARRAY DI AWAL
array_unshift($ar_array, "dodo", "abay", "tyar");
print_r($ar_array);

echo "<br>";
// ARRAY ASSOCIATIVE
$buah_buahan = [
    "apel" => "merah",
    "jeruk" => "jingga",
    "semangka" => "hijau"
];

echo "<br>";
foreach ($buah_buahan as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

// ARRAY MULTIDIMENSI
$siswa = [
    ["budi", "L", "12"],
    ["beno", "l", "13"],
    ["rini", "p", "21"]
];
print_r($siswa)
?>