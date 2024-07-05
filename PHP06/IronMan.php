<?php

class IronMan{
    public $GambaDx;
    public $GambaSx;
    public $BraccioDx;
    public $BraccioSx;
    public $Core;

    public function __construct(Leg $gd,Leg $gs,Arm $bd,Arm $bs,Core $c)
    {
        $this->GambaDx=$gd;
        $this->GambaSx=$gs;
        $this->BraccioDx=$bd;
        $this->BraccioSx = $bs;
        $this->Core = $c;
    }

    public function attaccoBraccia($nemico){
        $this->BraccioDx->attacca($nemico);
        $this->BraccioSx->attacca($nemico);
    }

    public function corri(){
        $this->GambaDx->corri();
        $this->GambaSx->corri();
    }
}

 class Leg implements LegActions{

    public function kick()
    {
        echo "Tiro  un calcio";
    }

    public function corri()
    {
        echo "Inizia a correre";
    }

    public function vola(){
        echo "Vola!";
    }
}

abstract class Arm{
    public abstract function attacca(Enemy $nemico);
}

class PowerDrill extends Arm{
    use Nuclear;
    public $damage = 20;
    public function attacca(Enemy $nemico){
        echo "Sto attaccando ".$nemico->name;
        $nemico->health -= $this->damage;
    }
}


class Rocket extends Arm{
    public $damage = 40;
    public function attacca(Enemy $nemico){
        echo "Sto lanciando un razzo verso ".$nemico->name;
        $nemico->health -= $this->damage;
    }
}

class Core{

}


interface LegActions{
    public function corri();
    public function vola();
    public function kick();

}


$ironMan1 = new IronMan(new Leg,new Leg, new PowerDrill,new Rocket,new Core);



class Enemy{

    public $name = 'Dummy';
    public $health = 30;
}

$enemy = new Enemy;

$ironMan1->BraccioDx->attaccoNucleare();

var_dump($enemy);


trait Nuclear{
    protected function attaccoNucleare(){
        echo "Attacco nucleare prova\n";
    }
}