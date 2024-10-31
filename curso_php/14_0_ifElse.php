<?php
    //if(){}else{}
    //if(): else: endif;

    if(1>7){
        echo "Condicion verdadera";
    }else{
        echo "Condicion falsa";
    }

    if(1>7):
        echo "Condicion verdadera";
    else:
        echo "Condicion falsa";
    endif;

    /*Calcular el total que una persona 
    * debe pagar en una llantera, el precio de cada
    * llanta es de $800 si se compran menos de 
    *5 llantas y de $700 si se compran 5 o más
    */
    $totalLlantas=4;
    
    if($totalLlantas > 5){
        $precio= $totalLlantas * 700;
    }else{
        $precio= $totalLlantas * 800;
    }

    echo "El precio total de las llantas($totalLlantas) es de $precio";

    /* Determinar si un alumno aprueba o reprueba
    * un curso, sabiendo que aprobara si su promedio
    * de tres calificaciones es mayor o igual a 7.0;
    * repueba en caso contario
    */

    $alumnoNom= "Aleix";
    $nota1= 6;
    $nota2= 5;
    $nota3 = 6;

    $media= ($nota1 + $nota2 + $nota3)/3;

    if($media >= 7){
        echo "El estudiante $alumnoNom esta Aprobado";
    }else{
        echo "El estudiante $alumnoNom esta Suspendido";
    }

    $alumno=[
        "nombre"=>"Aleix", 
        "nota1"=>"5", 
        "nota2"=>5,
        "nota3"=>5
    ];

    /*$alumno= array("nombre"=>"Aleix", 
    *    "nota1"=>"5", 
    *    "nota2"=>5,
    *    "nota3"=>5);
    */
    $mediaNotaArray= ($alumno["nota1"]+$alumno["nota2"]+$alumno["nota3"])/3;

    
    if($mediaNotaArray >= 7){
        echo "El estudiante ".$alumno["nombre"]." esta Aprobado";
    }else{
        echo "El estudiante ".$alumno["nombre"]." esta Suspendido";
    }