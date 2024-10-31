<?php

    /*Variables
    * Se representan con un signo de dolar $
    * nombre de variables tiene que mpezar por:
    * una letra (a,b,c...) o un _
    *seguido de:
    * número de letars, números y _
    * Sensible a mayu y minuscular:
    * $AB no es lo mismo que $Ab
    *WARNING: NO PUEDE EMPEZAR CON UN NÚMERO
    */

    $nombre="Aleix <br>";
    echo $nombre;

    //Snake Case
    $nombre_completo="Aleix Busquets <br>";
    echo $nombre_completo;
    $NOMBRE_COMPLETO = "Aleix Busquets <br>";
    echo $NOMBRE_COMPLETO;
    //lower camel case
    $nombreCompleto="Aleix Busquets <br>";
    echo $nombreCompleto;
    //upper camel case
    $NombreCompleto="Aleix Busquets <br>";
    echo $NombreCompleto;
    //Upper case
    $NOMBRECOMPLETO = "Aleix Busquets <br>";
    echo $NOMBRECOMPLETO;

    /*Variables pueden cambiar su valor durente 
    *la ejecucion del programa
    */
    $NOMBRECOMPLETO = 10;
    echo $NOMBRECOMPLETO;



