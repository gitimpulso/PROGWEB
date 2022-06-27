<?php

class Animal{

    private $Nombre;
    private $Raza;

    public function __construct($Nombre, $Raza){
        $this->Nombre = $Nombre;
        $this->Raza = $Raza;
    }

    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function setRaza($Raza){
        $this->Raza = $Raza;
    }

    public function getRaza(){
        return $this->Raza;
    }



}

?>