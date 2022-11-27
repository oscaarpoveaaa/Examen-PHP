<!-- 1. Crea una clase para almacenar soportes (Soporte.php). Esta clase será la clase padre 
de los diferentes soportes con los que trabaje nuestro videoclub (cintas de vídeo, 
videojuegos, etc.): 
Crea el constructor que inicialice sus propiedades. Fíjate que la clase no tiene métodos 
setters. 
Definir una constante mediante un propiedad privada y estática denominada `IVA con 
un valor del 21%. Usa index1.php para probar la clase.  -->


<!-- 5.Transforma Soporte a una clase abstracta y comprueba que todo sigue funcionando. 
¿Qué conseguimos al hacerla abstracta? Responda mediante comentario en la clase. 
 
En index4.php está el código para probar la clase VideoClub.  -->


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