<?php

namespace ExamenPHP\app;

include_once("Soporte.php");
include_once("./autoload.php");

class Juego extends Soporte
{

    public function __construct(string $titulo, int $numero, int $precio, public string $consola, private int $minNumJugadores, private int $maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);
    }

    public function muestraResumen()
    {
        echo    "<br>Consola: " . $this->consola .
            "<br>Min Jugadores: " . $this->minNumJugadores .
            "<br>Max jugadores: " . $this->maxNumJugadores . "<br>";
    }
}

?>