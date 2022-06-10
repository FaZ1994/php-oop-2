<?php
require_once __DIR__ . '/User.php';
class Visa extends User{
    protected $number;
    protected $dateExp; 

    function __construct($_number,$_dateExp)
    {
        $this->number = $_number;
        $this-> dateExp = $_dateExp;
    }
    
    public function setNumber($_number){
        $this->number = $_number;
    }
    public function getNumber(){
        return $this->number;
    }
    public function setDate($_dateExp){
        if(strtotime(date('m/y')) > strtotime($_dateExp)){
            throw new Exception('Errore: carta di credito scaduta');
        }else{
            $this->dateScad = $_dateExp;
        }
    }
    public function getDate(){
        return $this->dateScad;
    }



}


