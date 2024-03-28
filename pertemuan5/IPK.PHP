<?php 
require_once('Mahasiswa.php'); 
class IPK extends Mahasiswa 
{
    public $ipk;

    public function __construct($nim, $name, $programStudy, $tahunAngkatan, $ipk)
    {
        $this->ipk = $ipk;
        parent::__construct($nim, $name, $programStudy, $tahunAngkatan);
    }

    public function getInfo()
    {
        parent::getInfo();
        echo "IPK mahasiswa : ". $this->ipk . "<br>";
        echo "Predikat Mahasiswa :". $this->Predikat(). "<br";
    }
    public function Predikat(){

        if($this->ipk <2.0 ){
            return"Cukup";
        } elseif ($this->ipk >=2.0 and $this->ipk<3.0){
            return"Baik";
        } elseif ($this->ipk >=3.0 and $this->ipk <3.75) {
            return "Memuaskan";
        } elseif ($this->ipk >=3.75) {
            return "cum laude";
        }else {
            return"eror";
        }
    }
}
$mahasiswa2 = new IPK("0110223308", "INDIKA PUTRA PRAISAH", "Teknik Informatika", 2023, 3.9);
$mahasiswa2->getInfo();
?>