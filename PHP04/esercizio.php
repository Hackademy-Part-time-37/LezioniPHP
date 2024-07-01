<?php

// 



function checkPassword($pass){

    
    if(checkUpper($pass) && checkNumber($pass) && checkLength($pass)){
        echo "La password è corretta \n";
        return true;
    }
    return false;
}

function checkUpper($password){
    for($i=0;$i < strlen($password);$i++){
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    echo "Serve almeno un carattere maiuscolo\n";
    return false;
}

function checkNumber($password){
    for($i=0;$i < strlen($password);$i++){
        if(is_numeric($password[$i])){
            return true;
        }
    }
    echo "Serve almeno un carattere numerico\n";
    return false;

}


function checkLength($password){

    if(strlen($password)>8){
        return true;
    }
    echo "La lunghezza deve essere almeno di 8 caratteri \n";
    return false;

}

$flag = false;

do{
    $password = readline("Inserisci la tua password: ");
    $flag = checkPassword($password);
}while(!$flag);

echo "Hai messo una password corretta!!";

