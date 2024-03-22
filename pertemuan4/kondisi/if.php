<?php 
/**
 * if adalah fungsi untuk melakukan perulangan
 * else adalah fungsi untuk melakukan menjalankan hasil kondisi jika kondisi tidak terpenuhi\
 * elseif adalah fungsi untuk melakukan pengecekan kondisi jika kondisi sebelumnya tidak
 */
$nilai = 80;
if ($nilai >= 80 and $nilai <95) {
    echo 'Nilai anda ' . $nilai . ' dan anda lulus';
} elseif($nilai >= 95) {
    echo 'nilai anda ' . $nilai . ' dan anda lulus anda keren!';
} else {
    echo 'Nilao anda ' . $nilai . ' dan anda tidak lulus';
} 
?>