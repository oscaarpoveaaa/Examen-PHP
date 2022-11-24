<!-- 3. Crear la clase Cliente. El constructor recibirá el nombre, número y 
maxAlquilerConcurrente, este último pudiendo ser opcional y tomando como valor por 
defecto 3. Tras ello, añade getter/setter únicamente a número, y un getter a 
numSoportesAlquilados (este campo va a almacenar un contador del total de 
alquileres que ha realizado). El array de soportes alquilados contendrá clases que 
hereden de Soporte. Finalmente, añade el método muestraResumen que muestre el 
nombre y la cantidad de alquileres (tamaño del array soportesAlquilados). 
 
Dentro de Cliente, añade las siguientes operaciones: 
- tieneAlquilado(Soporte $s): bool → Recorre el array de soportes y comprueba si está 
el soporte. 
- alquilar(Soporte $s): bool -→ Debe comprobar si el soporte está alquilado y si no ha 
superado el cupo de alquileres. Al alquilar, incrementará el numSoportesAlquilados y 
almacenará el soporte en el array. Para cada caso debe mostrar un mensaje 
informando de lo ocurrido. 
 
Seguimos con Cliente para añadir las operaciones: 
 
- devolver(int $numSoporte): bool → Debe comprobar que el soporte estaba alquilado 
y actualizar la cantidad de soportes alquilados. Para cada caso debe mostrar un 
mensaje informando de lo ocurrido 
- listarAlquileres(): void → Informa de cuantos alquileres tiene el cliente y los muestra. 
 
En index3.php está el código para probar la clase.  -->

<?php 

class Cliente{

private int $numSoportesAlquilados;
private $soportesAlquilados = array();



 function __construct(public string $nombre,private int $numero,private int $maxAlquilerOcurrente = 3)
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

/**
 * Get the value of numSoportesAlquilados
 */ 
public function getNumSoportesAlquilados()
{
return $this->numSoportesAlquilados;
}

public function tieneAlquilado(Soporte $s): bool{ //Recorre el array de soportes y comprueba si está el soporte. 

    return true;
}
public function alquilar(Soporte $s): bool{

    return true;
}
public function devolver(int $numSoporte): bool{

    return true;
}
public function listarAlquileres(): void{

    
}

}



?>