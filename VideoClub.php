<!-- 4. Llegado a este punto, vamos a relacionar los clientes y los soportes mediante la 
clase Videoclub. Así pues, crea la clase que representa el gráfico, teniendo en cuenta 
que: productos es un array de Soporte y socios es un array de Cliente. 
 
Los métodos públicos de incluir algún soporte, crearán la clase y llamarán al método 
privado de incluirProducto, el cual es el encargado de introducirlo dentro del array. 
  -->

<?php

class Videoclub{

    private $productos = array();
    private int $numProductos;
    private $socios = array();
    private int $numSocios;

    function __construct(
        private string $nombre,
    ) 
    {
    }
    private function incluirProducto(Soporte $producto){

    }
}


?>