<?php

namespace ExamenPHP\app;

include_once("Resumible.php");
include_once("./autoload.php");

abstract class Soporte implements Resumible
{
    public const IVA = 0.21;

    function __construct(public string $titulo, protected int $numero, private int $precio)
    {
    }
    public function getPrecio()
    {
        return $this->precio;
    }


    public function getPrecioConIva()
    {
        return $this->precio + ($this->precio * $this::IVA);
    }


    public function getNumero()
    {
        return $this->numero;
    }

    public function muestraResumen()
    {
        echo "Título: " . $this->titulo . "<br>Número: " . $this->getNumero() . "<br>Precio: " . $this->getPrecio() .
            "<br>Precio con IVA: " . $this->getPrecioConIva() . "<br>";
    }
}
?>