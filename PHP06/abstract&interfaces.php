<?php

// Classi astratte

// se metto abstract davanti a una classe non la rendo istanziabile, davanti a un metodo mi impedisce di definirlo
// il metodo astratto deve essere definito nelle classi che lo ereditano
abstract class Fish{
    
    public $pippo;
    public function pippo(){
        echo "Sono pippo";
    }

    // i metodi astratti possono essere o pubblici o protected, mai privati
    public abstract function splash();
} 


class Magikarp extends Fish{

    public function splash(){
        echo "Splash!";
    }

}

$pesce = new Fish;



class Deliveroo{


    public function ConsegnaPacco($invio){
        $invio->stampaRicevuta();
    }

}


abstract class Sendable{

    public abstract function stampaRicevuta();

}

class Package extends Sendable{
    public function stampaRicevuta()
    {
        echo "Ecco la tua ricevuta: odasfoddas";
    }
}

class Soldi extends Sendable{
    public function stampaRicevuta()
    {
        echo "Hai ricevuto i tuoi soldi";
    }
}



// interfaces


interface GitHub{

    // i metodi nelle interfacce devo per forza essere pubblici
    public function connettiLaChiaveSSH($parametro);

    public function effettuaPush();

    public function effettuaPull();

}


class Computer implements GitHub{
    public function connettiLaChiaveSSH($parametro)
    {
        
    }

    public function effettuaPull()
    {
        
    }

    public function effettuaPush()
    {
        
    }
}

