<?php
class Autor
{   
    private $id;
    private $nombres;
    private $resumen;
    
    public function __construct($id, $nombres, $resumen)
    {
      $this->id_autor = $id;
      $this->nombres = $nombres;
      $this->resumen = $resumen;
    }
   
    public function getId()
    {
      return $this->id;
    }
   
    public function getNombres()
    {
      return $this->nombres;
    }
   
    public function getResumen()
    {
      return $this->resumen;
}