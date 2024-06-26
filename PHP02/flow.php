<?php
// Teorema di Bohm Jacopini
// Ogni algoritmo è scrivibile come composizione di sequenze selezioni e iterazioni

// Sequenza: è un blocco di codice che viene eseguito riga per riga

// Selezioni: è un blocco di codice che può essere eseguito o no a seconda di una condizione

// Iterazione: è un blocco di codice che viene ripetuto fin quando una condizione non è verificata


//? Selezioni :

// If else
// If elseif else
// switch

$condizione = '5.43';


if($condizione){

    // echo $condizione;

}else{
    // echo "La stringa è vuota";

}

// echo "\n Fine programma";


// voglio stampare Ho la patente  se ho piu di 18 anni
// voglio stampare Sto per prendere la patente se ho piu di 16 anni
// non ho la patente
$eta = 52;

// if($eta >18 ){
//     echo "Ho la patente";
// }elseif($eta >=16){
//     echo "Sto per prendere la patente";
// }
// elseif($eta ==52){
//     echo "Ho 52 anni";
// }
// else{
//     echo "Non ho la patente";
// }


// if($condizione){

// }elseif($condizione2){

// }else{

// }

//? Switch 
//il parametro dello switch non è necessariamente un valore di verità
$i = 4;

// switch($i){
//     case 5:
//         echo "Sono di valore 5";
//         break;
//     case 4:
//         echo "Sono di valore 4";
//         break;
//     default:
//         echo "Non corrispondo a nessun caso";
//         break;
// }

// if($i == 5){
//     echo "Sono di valore 5";
// }
// elseif($i == 4){
//     echo "Sono di valore 4";
    
// }else{
//     echo "Non corrispondo a nessun caso";
// }



$eta = 20;

switch(true){
    case $eta>18:
        echo "Ho la patente";
        break;
        
    case $eta>16:
        echo "Sto per prendere la patente";
        break;
       
    default:
        echo "Non ho la patente";
        break;
}



