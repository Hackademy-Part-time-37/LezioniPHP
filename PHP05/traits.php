<?php


class Vehicle{

    public function veicolo(){
        echo "Sono un veicolo";
    }
}

class MotorVehicle extends Vehicle{

    public function motorizzato(){
        echo "Sono un veicolo motorizzato";
    }
}

class FlyingMotorVehicle{
   use Flying;
}

class TractionVehicle{
    public function trazione(){
        echo "Sono un veicolo a trazione";
    }
}


class FlyingTractionVehicle{
    use Flying;

    // public function volante(){
    //     echo "Sono la funzione della classe volante";
    // }
    
}

// un tratto permette di inserire metodi e attributi in delle classi in maniera arbitraria e scollegata dall'ereditarietà

trait Flying{
    public function volante(){
        echo "Sono un veicolo volante";
    }
    public $agg = 'Prova';

}


$traction = new FlyingTractionVehicle;


