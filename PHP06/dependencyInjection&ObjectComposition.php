<?php

class Mailman{

    protected $letter;
    // posso dire a un parametro di che classe deve essere oggetto con il type hinting
    public function __construct(Mail $letter)
    {
        $this->letter= $letter;
        $letter->consegna($letter->indirizzo);
    }

}

// $lettera = new Mail;
//inietto una dipendenza come parametro, mailman dipende da oggetti di tipo mail per funzionare 
$postino = new Mailman(new Mail);



class Mail{
    public $contenuto = 'Roba segreta';
    public $indirizzo = 'Via delle rose 98';
    public function consegna($indirizzo){
        echo "Ho consegnato il pacco a ".$indirizzo;
    }

}

