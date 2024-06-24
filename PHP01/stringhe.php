<?php

// Stringhe
$nome = 'Emanuele';

$stringa1 = 'Ciao sono';

$stringa2 = "Ciao sono $nome \n";

// Operatore di concatenazione .

echo $stringa1 . " " . $nome . $stringa2 . "\n";

$nome = 4;

// PHP è un linguaggio a tipizzazione debole

// accedere ai caratteri di una stringa

$stringa1[3] = '';

var_dump($stringa1);