<?php

// for
//while
//do while
// foreach

//operatore incremento e decremento

$a =1;

$a = $a +1;//queste due righe sono equivalenti
$a++;

$a--;

//For

$stringa = "Sotoo a loco";

// for($i=0; $i<strlen($stringa);$i++){
//     echo $stringa[$i] ." ";
// }

// la modifica dell'iteratore avviene dopo l'esecuzione di un ciclo


//? while
$a =0;



// while($a<=20){

    
//     echo $a . " ";
//     $a++;
    
// }

//? do while

// do{
//     echo "Sono la prima iterazione";
// }while(false); 

//? Foreach 

// il foreach può essere utilizzato solamente sugli array

$array = [
    [
        'Marco','Bianchi','M'
    ],
    1,424,5353,123
    ,'siota'
    ,'stringa'
];

foreach($array as $elemento){

    
    // var_dump($elemento);

}

//primo giro
// $elemento = $array[0];
// echo $elemento[0];

// //secondo giro
// $elemento = $array[1];
// echo $elemento[0];



//?

$persona = [
    'nome'=>'Piero',
    'cognome'=>'Verdi',
    'eta'=>54
];

foreach($persona as $chiave => $valore){

    // echo $chiave.": ".$valore ."\n";

}





// 

$persone = [

    [
        'nome'=> 'Luca',
        'cognome'=>'Bianchi',
        'genere'=>'M'
    ],
    [
        'nome'=> 'Paola',
        'cognome'=>'Bianchi',
        'genere'=>'F'
    ],
    [
        'nome'=> 'Ernio',
        'cognome'=>'Bianchi',
        'genere'=>'Po'
    ],
];


foreach($persone as $key => $persona){

    if($persona['genere']=='M'){
        echo "Ciao sono il signor ".$persona['nome'] ." ".$persona['cognome']."\n";
    }elseif( $persona['genere']=='F'){
        echo "Ciao sono la signora ".$persona['nome'] ." ".$persona['cognome']."\n";
    }else{
        echo "Ciao sono ".$persona['nome'] ." ".$persona['cognome']."\n";
    }


}