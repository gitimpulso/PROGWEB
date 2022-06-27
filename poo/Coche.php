<?php

class Coche {

    /*
     'public': se puede acceder desde donde sea. 
     'protected': se puede acceder desde la misma clase, mediante clases heredadas o desde la clase padre. 
     'private': únicamente se puede acceder desde la clase que los definió.
     */
    
    public $matricula;
    public $marca;
    public $color;

    //Constructor
    public function __construct($matricula, $marca, $color){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->color = $color;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}

?>