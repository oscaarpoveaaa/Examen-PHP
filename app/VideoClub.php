<!-- 4. Llegado a este punto, vamos a relacionar los clientes y los soportes mediante la 
clase Videoclub. Así pues, crea la clase que representa el gráfico, teniendo en cuenta 
que: productos es un array de Soporte y socios es un array de Cliente. 
 
Los métodos públicos de incluir algún soporte, crearán la clase y llamarán al método 
privado de incluirProducto, el cual es el encargado de introducirlo dentro del array. 
  -->

<?php
include_once("CintaVideo.php");
include_once("Juego.php");
include_once("Disco.php");
include_once("Soporte.php");
include_once("Cliente.php");

class Videoclub
{

  private $productos = array();
  private int $numProductos = 0;
  private $socios = array();
  private int $numSocios = 0;

  function __construct(
    private string $nombre,
  ) {
  }
  private function incluirProducto(Soporte $producto)
  {
    array_push($this->productos, $producto);
  }
  public function incluirCintaVideo($titulo, $precio, $duracion)
  {
    $cintaVideo = new CintaVideo($titulo, $this->numProductos, $precio, $duracion);
    $this->numProductos++;
    $this->incluirProducto($cintaVideo);
  }
  public function incluirDvd($titulo, $precio, $idiomas, $pantalla)
  {
    $dvd = new Disco($titulo, $this->numProductos, $precio, $idiomas, $pantalla);
    $this->numProductos++;
    $this->incluirProducto($dvd);
  }
  public function incluirJuego($titulo, $precio, $consola, $minJ, $maxJ)
  {
    $juego = new Juego($titulo, $this->numProductos, $precio, $consola, $minJ, $maxJ);
    $this->numProductos++;
    $this->incluirProducto($juego);
  }
  public function incluirSocio($nombre)
  {
    $socio = new Cliente($nombre, $this->numSocios);
    $this->numSocios++;
    array_push($this->socios, $socio);
  }
  public function listarProductos()
  {
    echo ("<br>");
    foreach ($this->productos as $key) {
      print_r($key);
      echo ("<br>");
    }
  }
  public function listarSocios()
  {
    echo ("<br>");
    foreach ($this->socios as $key) {
      print_r($key);
      echo ("<br>");
    }
  }

  public function alquilaSocioProducto($numeroCliente, $numeroSoporte)
  {
    foreach ($this->socios as $key) {
      if ($key->getNumero() == $numeroSoporte) {
        foreach ($this->productos as $key1) {
          if ($key1->getNumero() == $numeroCliente) {
            $key->alquilar($key1);
          }
        }
      }
    }
  }
}


?>