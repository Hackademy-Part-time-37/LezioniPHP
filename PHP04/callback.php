<?php



function principale(callable $callback){

    $callback();

}


// function callbackFunction(){

//     echo "Sono la funzione di callback";
// }


$funz1 = function (){
    echo "Sono la funzione anonima";
};

// var_dump($funz1);

// principale($funz1);




$array = [432,5432,324,'222ELEMENTO'];

$arraFinale= array_map(function ($elemento) use ($array){
    echo $elemento ." ";
    return $elemento *2;
},$array);


// funzione di callback è un funzione che viene passata come parametro

// funzione anonima è una funzione che viene utilizzata nel momento 
//in cui viene create e non rimane in memoria (non ha un nome)

$y= 5;

$var = fn($x)=>  $x+$y;


var_dump($var(4));