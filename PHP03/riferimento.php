<?php

// Il passaggio per riferimento passa al parametro formale l'indirizzo di memoria della variabile esterna alla funzione
// ne permette la modifica

function riferimento(&$parametro){

    $parametro++;
    echo $parametro;

}

$a = 5443;

riferimento($a);

var_dump($a);

// Il passaggio di un parametro per valore assegna al parametro formale solamente il contenuto di ciò che è stato passato dall'esterno


