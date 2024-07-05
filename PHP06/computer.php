<?php

//object Composition

class Computer {
    public $schedaMadre;
    public $schedaVideo;
    public $CPU;

    public function __construct(Motherboard $schMad, GraphicsCard $schVid, CPU $CPU)
    {
        $this->schedaMadre = $schMad;
        $this->schedaVideo = $schVid;
        $this->CPU = $CPU;
    }



}


class Motherboard{
    public function __construct(public $speed,public $power,public $name)
    {
        
    }

}

class GraphicsCard{

    public function __construct(public $cores,public $giga,public $name)
    {
        
    }


}

class GCARDV extends GraphicsCard{

}

class GCARDX extends GraphicsCard{

}


class CPU{
    public function __construct(public $colore,public $serie)
    {
        
    }
}

class CPUSuper extends CPU{

    public function super(){
        echo "Sono super";
    }

}

class CPUNano extends CPU{
    public function nano(){
        echo "Sono nano";
    }
}



$computer1 = new Computer(new Motherboard(1000,250,'SuperMotherboard')
,new GCARDV(16,32,'GTX3060'),new CPUSuper('rossa',22100));


$computer2 = new Computer(new Motherboard(20,2540,'NanoMotherboard')
,new GCARDX(16,32,'GTX3060'),new CPUNano('rossa',22100));

$computer3 = new Computer(new Motherboard(1000,250,'SuperMotherboard')
,new GCARDV(16,32,'GTX3060'),new CPUNano('rossa',22100));


$computer4 = new Computer(new Motherboard(20,2540,'NanoMotherboard')
,new GCARDX(16,32,'GTX3060'),new CPUSuper('rossa',22100));

print_r($computer2);