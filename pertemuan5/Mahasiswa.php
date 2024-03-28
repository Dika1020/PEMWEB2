<?php 
class Mahasiswa {
    public $nim;
    public $name;
    public $programStudy;
    public $tahunAngkatan;
    public function __construct($nim,$name,$programStudy,$tahunAngkatan){
        $this->nim =$nim;
        $this->name = $name;
        $this->programStudy = $programStudy;
        $this->tahunAngkatan = $tahunAngkatan;
    }
    public function getInfo()
    {
        echo "NIM Mahasiswa : " . $this->nim . "<br>";
        echo "Nama Mahasiswa : " . $this->name . "<br>";
        echo "Program Study Mahasiswa : " . $this->programStudy . "<br>";
        echo "Tahun Angkatan Mahasiswa : " . $this->tahunAngkatan . "<br>";
    }
}
