<?php

public class Punto{

    private $x;
    private $y;

    //constructor
    public function __construct($x,$y){
        this->x = $x;
        this->y = $y;
    }

    public function getX(){
        return $this->x;
    }

    public function getY(){
        return $this->y;
    }

    public function Distancia($punto){
        return $this->$punto.getX()+$punto.getY();
        //comprobar si el método es correcto
    }
}
?>