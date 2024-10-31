<?php
/* MATCH TIENE EN CUENTA EL TIPO DE DATO,
* TAMPOCO PERMITE EL FALL-THROUGH
*(multiples case se ejecutan sin un break)
* a diferencia del siwtch.
*match usa el comparador de identidad(===)
*PHP 8
*
*Usa el operador match en PHP cuando necesites 
*realizar comparaciones simples y quieras mejorar
*la legibilidad y la claridad de tu código. 
*Es especialmente útil en situaciones donde 
*tienes múltiples condiciones que devuelven 
*resultados basados en el valor de una sola variable.
*/
$a=8;

$x=10;
$y=9;
$z=7;
$j=8;
$c=1;

$resultado= match($a){
    $x => "Valor igual a x",
    $y => "Valor igual a y",
    $j, $c => "Valor igual a j o c",
    $z => "Valor igual a z",
    11 => "Valor igual a 11",

    default => "No coincide con ninguna valiarble"
};

echo $resultado;

//OTRO EJEMPLO

$edad= 18;

$resultado2 = match(true){
    $edad >=  60 => "Tercera edad",
    $edad >= 30 => "Adulto",
    $edad >= 18 => "Adulto joven",
    default => "Eres un niño"
};

echo $resultado2;