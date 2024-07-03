<?php

class Person{

    protected  $name;
    protected $surname;

    protected function __construct($name,$surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

}

class Teacher2 extends Person{

    public function presentati(){
            echo "Ciao sono ". $this->name . $this->surname;

    }

    public function __construct($name,$surname)
    {
        parent::__construct($name,$surname);
    }

}

class Student extends Person{

}


$teacher  = new Person('Pippo','Baudo');

$teacher->presentati();


var_dump($teacher);



//?Modificatori di visibilità

// public: visibile ovunque

// protected: visibile solo nella classe o in classi che ereditano da essa

// private: visibile solo nella classe


