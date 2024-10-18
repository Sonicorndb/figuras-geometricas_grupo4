<?php
    include_once 'FiguraGeometrica.php';
    class Cuadrado extends FiguraGeometrica {
        private $lado;
        private $esquina;

        public function __construct ($lado , $esquina){
            this->lado = $lado;
            this->esquina = $esquina;
        }

        public function getLado(){
            return this->lado;
        }

        public function area(){
            return lado * lado;
        }

        public function perimetro(){
            return lado * 4;
        }
    }
?>