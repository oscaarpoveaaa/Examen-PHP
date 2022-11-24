<!-- 2.Crea la clase Juego la cual hereda de Soporte. Añade los atributos consola, 
minNumJugadores y maxNumJugadores. A continuación, añade el método 
muestraJugadoresPosibles, el cual debe mostrar Para un jugador, Para X jugadores o 
De X a Y jugadores dependiendo de los valores de los atributos creados (min y 
maxNumJugadores). Finalmente, sobrescribe tanto el constructor como el método 
muestraResumen. En index2.php está el código para probar la clase. 
-->

<?php
include_once("Soporte.php");

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