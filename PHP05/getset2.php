<?php

class Vault{

    private $soldiInBanca = 203200000;

    //getter si occupa di recuperare il valore, senza poterlo modificare
    public function getSoldi(){
        echo "$this->soldiInBanca";
    }

    //setter permette di settare il valore di un attributo nascosto all'esterno

    protected function setSoldi($soldi){
        $this->soldiInBanca = $soldi;
    }

}


class VaultAdmin extends Vault{
    private $livelloDiPermessi;

    public function setSoldi($valore){
        if($this->livelloDiPermessi>3){
            parent::setSoldi($valore);
        }
    }
}

$valut = new Vault;



