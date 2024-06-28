<?php

// spread o splat operator  ...

function media(...$array){

    $totale=0;
    $count =0;

    foreach($array as $number){
        
                $totale += $number;
                $count++;
        
    }

    return $totale/$count;

}

// echo media();


$array = [4123,1412,412,5321,134,532];

$array2 =[432432,1321575,87656];

media(432432,1321575,87656,...$array);


