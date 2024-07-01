<?php

// OOP: object oriented programming

// classi e oggetti

//? Regole per nomi delle classi
// prima lettere maiuscola
// in inglese
// al singolare



class Cat{
    // attributi
    public $color;
    public $legs;
    public $tail;
    //metodo costruttore viene richiamato in automatico alla creazione dell'oggetto
    public function __construct( $coda = '', $gambe = '',$colore = '')
    {
        $this->color = $colore;
        $this->legs = $gambe;
        $this->tail = $coda;
        // $this->sayMeow();
    }
    // metodi
    public function sayMeow(){
        echo "Meow sono di color: ". $this->color ." ". $this->tail." ". $this->legs."\n";
    }
}


$cat = new Cat('1',colore:'rosso');

$cat->color = 'verde';

$cat2 = new Cat('bella','lunghe','nero');

// $cat->sayMeow();
// $cat2->sayMeow();



class CatHouse{

    public $cats =[];


}

$catHouse = new CatHouse;

array_push($catHouse->cats,$cat) ;
$catHouse->cats[] = $cat2;

var_dump($catHouse);


//? principi fondamentali dell'OOP

// incapsulamento: tutto il codice relativo a un oggetto è incapsulato nella classe da cui deriva

// ereditarietà 

// polimorfismo

// astrazione