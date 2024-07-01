<?php

class Person{

    public static $counter = 0;
    public $attribute = 'Prova';
    //static: è una keyword che rendo un attributo o un metodo 
    //non appartente a un oggetto ma all'intera classe


    public function __construct()
    {
        //self identifica la classe stessa
        self::$counter++;       
    }

    public static function setZero(){
        self::$counter = 0;
    }

    //metodi statici possono contenere solamente attributi statici
    public static function printCounter(){
        echo self::$counter ."\n";
    }


}


$persona = new Person;
$persona2 = new Person;
$persona3 = new Person;

$persona2->setZero();

// echo $persona2::$counter;

//? per accedere a un elemento static utilizzo ::

//$oggetto::$nomeAttributoStatico
// oppure
//NomeClasse::$nomeAttributoStatico



//? accedere a metodi statici

// Person::printCounter();
//oppure
// $persona::printCounter();
//oppure
//$persona->printCounter();