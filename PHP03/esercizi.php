<?php

//? Traccia 6

// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// HINT: l’operatore % restituisce il resto della divisione (es. 5 % 3 darà come risultato 2)

// HINT2: per sommare un numero al valore già presente in una variabile puoi scrivere

//  $num = $num + $valDaAggiungere oppure $num +=  $valDaAggiungere

//? Traccia 7

// Scrivi un programma che calcoli e stampi a terminale la lunghezza di una stringa

// senza utilizzare la funzione strlen()

// HINT: la soluzione con un warning è valida, per eliminarlo utilizzare la funzione isset() 

//? Traccia 6

// $array = [2,32,2,123,53,42];

// $totale = 0;
// $count = 0;

// foreach($array as $number){

//     if($number % 2 == 0){

//         $totale += $number;
//         $count++;

//     }

// }

// echo $totale/$count;


//Le due righe sono equivalenti

// $totale = $totale + $number;
// $totale += $number;

// +=
// -=
// *=
// /=
// .=

// Esempio concat

// $stringa = 'Hello ';

// $stringa .= 'world!';

// var_dump($stringa);


//? Traccia 7

$stringa = 'iasjdioasfas';


$length = 0;

while(isset($stringa[$length])){

    $length++;

}

echo $length;


$counter =0;

for($i=0;isset($stringa[$i]);$i++){
    $counter++;
}

echo $counter;


//Traccia 4

// $persone = ['VIP'=>['nome'=>'Piero','cognome'=>'Luca','genere'=>'M'],'Utente'=>['nome'=>'Piero','cognome'=>'Luca','genere'=>'M']];

// foreach($persone as $key => $persona){

//     switch($persona['genere']){
//         case 'M':
//             echo "Sig. " .$persona['nome']. $persona['cognome'] . ' è un '.$key ;
//             break;
//         case 'F':
//             echo "Sig. " .$persona['nome']. $persona['cognome'];
//             break;
//         default:
//             break;
//     }

// }



// $array = [
//     'Venezia'=>15,
//     'Roma'=>209


// ];

// foreach($array as $key => $elemento){
//     var_dump($key,$elemento);
// }