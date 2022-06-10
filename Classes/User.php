<?php
class User{
    protected $nome;
    protected $cognome;
    
    function __construct($_nome,$_cognome,$_creditCard)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;

    }
    public function setNome($_nome){
       $this->nome = $_nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCognome($_cognome){
        $this->cognome = $_cognome;
    }
    public function getCognome(){
        return $this->cognome;
    }

