<?php

class Continente{
    private $continenteId;
    private $continenteNombre;

    //constructor
    function __construct(){

    }

    //getters
    public function getId(){
        return $this->$continenteId;
    }

    public function getNombre(){
        return $this->$continenteNombre

    }
    //setters
    public function setId($idContinente){
        $this->continenteId = $idContinente
    }

    public function setNombre($nombreContinente){
        $this->continenteNombre = $nombreContinente
    }

    public function toString(){
        return  $this->continenteId. " | " . $this->continenteNombre
    }
}
    
?>