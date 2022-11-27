<?php

namespace ExamenPHP\app;

include_once("./autoload.php");
include_once("Soporte.php");

class Disco extends Soporte
{

    public function __construct(string $titulo, int $numero, int $precio, public string $idioma, private string $formatPantalla,)
    {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraResumen()
    {
        echo "<br>Formato de pantalla: " . $this->formatPantalla .
            "<br>Idioma: " . $this->idioma . "<br>";
    }
}


?>