<?php

class Producto{
    private $Nombre;
    private $Precio;

    public function __construct($Nombre, $Precio){
        $this->Nombre = $Nombre;
        $this->Precio = $Precio;
    }

    public function setNombre($Nombre){
        $this->Nombre = $Nombre;
    }

    public function setPrecio($Precio){
        $this->Precio = $Precio;
    }

    public function getNombre(){
        return $this->Nombre;
    }

    public function getPrecio(){
        return $this->Precio;
    }
}
?>