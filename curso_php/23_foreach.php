<?php
/* foreach--> iteracion sobre ARRAYS
*FUNCIONA SOLO SOBRE ARRAYS
*
*foreach($array as $valor){
*   $valor trendrá en cada iteración
*   un valor del array
*}
*
*foreach($array as $clave=> $valor){
*   $clave trendrá en cada iteración
*   un clave del array
*
*   $valor trendrá en cada iteración
*   un valor del array
*}
*/
    //Array tipo escalar
    $laptop=["Acer Nitro 5", "AMD Ryzen 5", "SSD 256GB", "RAM 24GB"];

    //Array tipo asociativo
    $frutas=[
        "Fresas"=>100, 
        "Peras"=>30, 
        "Sandias"=>10,
        "Melocotones"=>17,
        "Manzanas"=>9
    ];

    foreach($laptop as $valor){
        echo $valor."<br>";
    }

    foreach($laptop as $clave => $valor){
        echo $clave."=>".$valor."<br>";

    }

    foreach($frutas as $clave => $valor){
        echo "Hay ".$valor." en ".$clave."<br>";

    }
    
    //Array tipo multidimension(base de datos)
    $productos= [
        ["codigo"=> "A0001", "descipcion"=>"Mouse"],
        ["codigo"=> "A0002", "descipcion"=>"Teclado"],
        ["codigo"=> "A0003", "descipcion"=>"Monitor"],
        ["codigo"=> "A0004", "descipcion"=>"Impresor"]
    ];

    foreach ($productos as $prod) {
        echo $prod["codigo"]." - ".$prod["descipcion"]."<br>";
    }


