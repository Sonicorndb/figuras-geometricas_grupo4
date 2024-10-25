<?php
// Incluye los archivos necesarios desde la carpeta src
require_once __DIR__ . '/../src/FiguraGeometrica.php';
require_once __DIR__ . '/../src/Punto.php';

// Función para ejecutar una aserción manual de igualdad
function assertEquals($expected, $actual, $testName) {
    if ($expected === $actual) {
        echo "[✔] $testName: Prueba pasada.<br>";
    } else {
        echo "[✘] $testName: Falló. Se esperaba '$expected', pero se obtuvo '$actual'<br>";
    }
}

// Pruebas unitarias simples para la clase Punto

// Test 1: Prueba si se retorna correctamente la coordenada X del punto
$punto = new Punto(1, 1);
$expectedX = 1;
$actualX = $punto->getX();
assertEquals($expectedX, $actualX, "Prueba de obtención del la coordenada X");

// Test 2: Prueba si se retorna correctamente la coordenada Y del punto
$punto = new Punto(1, 1);
$expectedY = 1;
$actualY = $punto->getY();
assertEquals($expectedY, $actualY, "Prueba de obtención del la coordenada Y");

// Test 3: Prueba si se retorna correctamente la distancia al origen del punto
$punto = new Punto(2, 2);
$expectedDis = Math.sqrt(8);
$actualDis = $punto->Distancia();
assertEquals($expectedY, $actualY, "Prueba de obtención del la distancia del punto ");

?>