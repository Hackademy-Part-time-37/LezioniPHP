<?php

// Ereditarietà: 

class Animal{

    public $pelo;
    public $eta;
    public $numeroDiArti;


    public function __construct($pelo,$eta,$nArti)
    {
        $this->pelo= $pelo;
        $this->eta= $eta;
        $this->numeroDiArti = $nArti;
    }

    public function hello(){
        echo "Ciao!";
    }

}



class Cat extends Animal{
    public $name;
    public $vistaNotturna;

    public function __construct($pelo,$eta,$nArti,$name,$vistaNotturna)
    {
        parent::__construct($pelo,$eta,$nArti);
        $this->name = $name;
        $this->vistaNotturna = $vistaNotturna;
    }

}

class Dog extends Animal{
    public $name;
    public $fiuto;

    public function __construct($pelo,$eta,$nArti,$name,$fiuto)
    {
        parent::__construct($pelo,$eta,$nArti);
        $this->name = $name;
        $this->fiuto = $fiuto;
    }

}

//? PHP ha l'ereditarietà singola

class GoldenRetriever extends Dog{

        public $felicita=10;

        public function __construct($pelo,$eta,$nArti,$name,$fiuto,$felicita)
        {
            $this->felicita = $felicita;
            parent::__construct($pelo,$eta,$nArti,$name,$fiuto);

        }

}

$golden = new GoldenRetriever('corto',12,4,'Pippo','Buono',10);

var_dump($golden);


// classi finali

// la keyword final può essere applicata solo a classi o a metodi interni a una classe
//ne impedisce la modifica

// final class Postino {

//     public final function codiceSegreto(){
//         echo "P4osd$";
//     }


// }

// class PostinoExpert extends Postino{



//     public function codiceSegreto()
//     {
//         echo "SDS$";
//     }
// }