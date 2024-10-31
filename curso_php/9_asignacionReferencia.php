<?php
    $texto="Barcelona";

    //copiamos el valor directamente
    $var1=$texto;
    //Asignacion por referencia
    //$var2 siempre tendrá el mismo valor que $texto
    $var2= $texto;

    echo $texto."<br>";
    echo $var1."<br>";
    echo $var2."<br><br>";

    $texto="Aleix Busquets";
    echo "Cambiamos el valor del texto a Aleix Bsuqets:<br>";
    echo $texto."<br>";
    echo $var1."<br>";
    echo $var2."<br>";