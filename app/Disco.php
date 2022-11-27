<!-- Crea la clase Disco la cual hereda de Soporte. Añade los atributos idiomas y 
formatoPantalla. A continuación, sobreescribe tanto el contructor como el método 
muestraResumen. En index1.php está el código para probar la clase.  -->

<?php
include_once("Soporte.php"); 
class Disco extends Soporte{

public function __construct(string $titulo,int $numero,int $precio,public string $idioma,private string $formatPantalla,)
    {
        parent::__construct($titulo,$numero,$precio);
    }

public function muestraResumen (){
        echo "<br>Formato de pantalla: " . $this->formatPantalla .
        "<br>Idioma: " . $this->idioma . "<br>" ;    
}

}


?>