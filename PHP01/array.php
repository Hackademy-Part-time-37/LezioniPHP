<?php

// In php gli array sono zero based

$array = ['Ciao',5,2,'Pippo',false];


// array associativi

$macchina = [
    'marchio' =>'Fiat',
    20 => '1989',
    10 => ' Prova',
    'Bravo'
];


// echo "La mia macchina è una {$macchina['marchio']} $macchina[2] del $macchina[1]";


// var_dump($macchina);

// $macchina1 = [
//     'Fiat',
    
//     'Bravo',

//     '1989',
// ];


$persona = [];

//utente inserisce il nome
$nome = 'Tania';

$persona['name'] = $nome;

// echo $persona['name'];

// var_dump($macchina);


//!


// array multidimensionali

$array2D = [1,3,5=>['Pippo','test'=>'Caio','Sempronio'],'Ciao'];

var_dump($array2D);

echo $array2D[6] ." ". $array2D[5]['test'];