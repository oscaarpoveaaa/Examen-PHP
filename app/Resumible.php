<!-- 6.Crea un interfaz Resumible, de manera que las clases que lo implementen deben 
ofrecer el método muestraResumen(). Modifica la clase Soporte y haz que implemente 
el interfaz. ¿Hace falta que también lo implementen los hijos? Responda mediante 
comentario.  -->

<?php 
namespace ExamenPHP\app;

include_once("./autoload.php");

interface Resumible{
    public function muestraResumen();
    
}

?> 