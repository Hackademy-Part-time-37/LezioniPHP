<?php

// include e require
//?include prova ad importare il file se ci riesce o no prosegue lo stesso
//?in require invece esige che l'importazione sia avvenuta per proseguire, altrimenti fatal error


//include_once e require_once importano il file una volta sola
include_once 'Animal.php';



$animal = new Animal;
var_dump($animal);