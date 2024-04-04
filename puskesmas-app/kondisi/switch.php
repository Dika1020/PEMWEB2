<?php 
$nilai = 90;

switch ($nilai) {
    case $nilai > 80 and $nilai < 90: //89
        echo "anda hebat";
        break;
    case $nilai >= 90 and $nilai < 100 : //mulai 91
        echo "Anda mantappp!";
        break;
    default:
        echo "Anda kurang beruntung!";
        break;
}

?>