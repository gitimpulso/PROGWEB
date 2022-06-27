<?php

    include_once("Coche.php");

    //$cocheContruct = new Coche("AAA1111", "Lalala", "Color");

    $miCoche = new Coche();
    $miCoche->matricula = "ABC1234";
    $miCoche->marca = 'vw';
    $miCoche->color = 'blanco';

    echo "Los datos del miCoche son: <br>";
    echo $miCoche->getMatricula()."<br>";
    echo $miCoche->getMarca()."<br>";
    echo $miCoche->getColor()."<br>";

    $otroCoche = new Coche();
    $otroCoche->setMatricula("ADB1234");
    $otroCoche->setMarca("Chevrolet");
    $otroCoche->setColor("Verde");

    echo "---------------<br>";
    
    echo "Los datos del otroCoche son: <br>";
    echo $otroCoche->getMatricula()."<br>";
    echo $otroCoche->getMarca()."<br>";
    echo $otroCoche->getColor()."<br>";



?>