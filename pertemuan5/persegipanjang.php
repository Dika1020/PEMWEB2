<?php

class PersegiPanjang {
    public $panjang;
    const Lebar = 10;

    public function __construct($panjang)
    {
        $this->panjang = $panjang;
    }

    public function luas() {
        $luas = self::Lebar * $this->panjang; 
        return $luas;
    }

    public function keliling() {
        $keliling = 2 * (self::Lebar + $this->panjang); 
        return $keliling;
    }
}

$panjang = new PersegiPanjang(18);


?>
