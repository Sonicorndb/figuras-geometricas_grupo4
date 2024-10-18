<?php
include_once 'FiguraGeometrica.php';

    class Circulo extends FiguraGeometrica{
        private $radio;
        private $centro;

        public function __construct($radio, $centro){
            $this->radio = $radio;
            $this->centro = $centro;
        }

        public function getRadio(){
            return $this->radio;
        }
        public function Area(){
            return 3.14 * pow($this->radio, 2);
        }
        public function Perimetro(){
            return 2 * 3.14 * $this->radio;
        }
        //Prueba Clase Circulo
        
    }

?>