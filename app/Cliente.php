<?php
namespace ExamenPHP\app;

class Cliente
{

    private $soportesAlquilados = array();
    private int $numSoportesAlquilados;
    private int $maxAlquilerConcurrente = 3;


    function __construct(public string $nombre, private int $numero)
    {
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /*
     Get the value of numSoportesAlquilados
     */
    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    public function tieneAlquilado(Soporte $s): bool
    {
        if (in_array($s, $this->soportesAlquilados)) {
            return true;
        } else {
            return false;
        }
    }

    /* Debe comprobar si el soporte está alquilado y si no ha 
superado el cupo de alquileres. Al alquilar, incrementará el numSoportesAlquilados y 
almacenará el soporte en el array. Para cada caso debe mostrar un mensaje 
informando de lo ocurrido.  */

    public function alquilar(Soporte $s): bool
    {
        $this->numSoportesAlquilados = 0    ;
        echo "<br>";
        if (($this->tieneAlquilado($s) == false) && $this->numSoportesAlquilados < $this->maxAlquilerConcurrente ) {
            $this->numSoportesAlquilados++;
            array_push($this->soportesAlquilados,$s);
            echo "Alquiler de " . $s->titulo . " correcto <br>";
            return true;
        } else {
            echo "El título: " . $s->titulo . " ya ha sido alquilado <br>";
            return false;
        }
    }
    public function devolver(int $numSoportesAlquilados): bool
    {
        echo "<br>";
        foreach ($this->soportesAlquilados as $key) {
            if ($key->getNumero() == $numSoportesAlquilados) {
                unset($this->soportesAlquilados[array_search($key, $this->soportesAlquilados)]);
                echo "Devolución Correcta <br>";
                return true;
            }
        }
        echo "Devolución Errónea <br>";
        return false;
    }

    public function listaAlquileres()
    {
        for ($i = 0; $i < count($this->soportesAlquilados); $i++) {
            if ($i != count($this->soportesAlquilados) - 1) {
                echo "<br>" .$this->soportesAlquilados[$i]->titulo .  " esta alquilado <br>";
            }
        }
    }
}



?>