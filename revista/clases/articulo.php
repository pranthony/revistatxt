<?php
class Autor
{
    private $id;
    private $titulo;
    private $pdf;
    private $palabras_clave;
    private $resumen;
    
    /* public function __construct($id, $titulo, $pdf, $palabras_clave, $resumen)
    {
      $this->id = $id;
      $this->titulo = $titulo;
      $this->pdf = $pdf;
      $this->palabras_clave = $palabras_clave;
      $this->resumen = $resumen;
    } */
    
    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }    
    
}

$antony = new Autor();
$antony->id = 1336673;
echo $antony->id;