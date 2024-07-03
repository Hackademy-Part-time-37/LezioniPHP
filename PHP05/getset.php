<?php

class SensibleData{
    private static $password = '1234';
    private static $username;

    // metodi getter

    public static function getPassword(){
        return self::$password;
    }

    // metodi setter

    public static function setPassword($password){
        self::$password = $password;
    }

}


class Banca{

    public function accedi($password){
        if($password == SensibleData::getPassword()){
            echo "Sei dentro";
        }
    }
}

$banca = new Banca;

$banca->accedi(1234);