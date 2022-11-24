<?php 

include_once("Soporte.php");

class CintaVideo extends Soporte{
public function __construct(string $titulo,int $numero,int $precio,private int $duracion)
    {
        parent::__construct($titulo,$numero,$precio);
    }

public function muestraResumen (){
    echo "Duracion: " . $this->duracion ;    
}

}

?>