<?php
include_once 'triangulo.php';


abstract class triangulo extends FiguraGeometrica {
    private float $base;
    private float $altura;
    private float $lado1;
    private float $lado2;
    private float $lado3;
    private punto $vertice;


    public function __construct(triangulo $vertice, $base, $altura, $lado1, $lado2, $lado3) {
        $this->vertice = $vertice;
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }


    public function getBase() {
        return $this->base;
    }


    public function getAltura() {
        return $this->altura;
    }


    public function areaTriangulo() {
        return ($this->base * $this->altura) / 2;
    }


    public function perimetroTriangulo() {
        // Perímetro de un triángulo (suma de los lados)
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
}
?>
