<?php
include_once 'punto.php';
    abstract class FiguraGeometrica extends Punto{
        protected $nombre;

        public function __construct($nombre){
            $this->nombre = $nombre;
            $this->precio = $precio;
        }

        public function getNombre(){
            return $this->nombre;
        }

        abstract public function Area(){

        }

        abstract public function Perimetro(){

        }
    }

?>