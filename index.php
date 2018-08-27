<?php

include 'Poligono.php';
include 'Cuadrado.php';
include 'Rectangulo.php';

function area($obj){
    $obj->calculo();
}

$cuadrado = new Cuadrado();
$rectangulo = new Rectangulo();
$poligono = new Poligono();

area($cuadrado);
area($rectangulo);
area($poligono);