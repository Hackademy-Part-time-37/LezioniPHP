<?php

class Person{

    public $name;
    public $surname;
    public $age;

    public function __construct($name,$surname,$age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function presentati(){
        echo "Ciao sono $this->name $this->surname e ho $this->age anni";
    }

    public static function prova(){
        echo "Ciao";
    }


}

class Teacher extends Person{

    public $subject;
    public $role;

    public function __construct($name,$surname,$age,$subject,$role)
    {
        //la keyword parent contiene l'oggetto da cui la classe sta ereditando
        parent::__construct($name,$surname,$age);
        $this->subject = $subject;
        $this->role = $role;
    }

    public function presentati()
    {
        echo "Ciao sono $this->name $this->surname e insegno $this->subject";
    }

    public function presentatiOld(){
        parent::presentati();
    }

    

}

$teacher = new Teacher('Pippo','Franco',35,'Italiano','Dirigente');

$teacher->presentati();