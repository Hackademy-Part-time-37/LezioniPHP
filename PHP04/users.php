<?php

class User{

    public $username;
    public $name;
    public $surname;
    public $password;
    public $email;

    public function __construct($name,$surname,$username,$password,$email)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;

        Website::$userList[]=$this;
    }

    public function presentati(){
        echo "Ciao! Sono $this->name $this->surname";
    }

}

$utente = new User('Giorgio','Rossi','gioros','abracadabra','gio@gmail.com');

$utente->presentati();

class Website{

    public static $userList = [];

    public function checkUser($username,$password){

    }

}


$utente1= new User('Piero','Rossi','gioros','abracadabra','gio@gmail.com');
$utente2= new User('Luca','Rossi','gioros','abracadabra','gio@gmail.com');

print_r(Website::$userList);