<?php

class Fruit {
    public $name = "asdas";
    const Jenis = "Buah";

    public function __construct($name)
    {   
        $this->name = $name; 
    }

    public function getName() {
        echo self::Jenis . " Namanya " . $this->name;        
    }
} 

$mangga = new Fruit("Apple"); 
echo $mangga->getName(); 
?>
