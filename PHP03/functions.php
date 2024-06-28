<?php

// Funzione 


//Definizione della funzione

function saluta(){

    echo "Ciao!";

}

// chiamata della funzione

// saluta();
// saluta();

// saluta();
// saluta();
// saluta();


// $a = 20;


// function stampa(){

//     $a = 36;
//     var_dump($a);
// }

// var_dump($a);

// stampa();

// Scope delle variabili

//Le variabili definite nel mio programma stanno nello scope globale

// Le variabili definite nelle funzioni stanno in uno scope locale diverso per ogni singola funzione


$c = 5;
$d = 203;

// funzione parametriche


// parametri formali
function somma($a,$b){

    return $a +$b;

}

//parametri reali
// somma($c,$d);

// somma(2,32);


// funzioni con parametri di default

function sottrazione2($num1 = 0,$num2 =  0){

    echo $num1 - $num2;

}

//passaggio parametro per nome ->  nomeparametro: valore da assegnare

sottrazione(num2: 30);


//

$soldi = 5000;
$acquisto = 340;
$donazioni = 45;

function sottrazione($num1 = 0,$num2 =  0){

    return $num1 - $num2;

}


sottrazione($soldi,$acquisto);

var_dump(sottrazione($soldi,$acquisto));

$soldiFinali = somma(sottrazione($soldi,$acquisto),$donazioni);

// In generale è buona pratica assegnare un solo compito a una singola funzione


// type hinting

function calcolatrice(int $num1,int $num2,string $operazione) : int|NULL{

    if($operazione=='somma'){
        return somma($num1,$num2);
    }
    elseif($operazione=='sottrazione'){
        return sottrazione($num1,$num2);
    }
    else{
        echo "Operazione non disponibile\n";
        return NULL;
    }
}

var_dump(CaLcOlatrice(32,42,'ds'));


// Funzioni non posso avere lo stesso nome anche differente solo per maiuscole -> sono case insensitive

//NO funzioni con lo stesso nome

calcolatrice('43','232','somma');


