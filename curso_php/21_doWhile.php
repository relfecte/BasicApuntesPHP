<?php
    //do{}while();

    /*Imprima los números del 1 al 20
    *(Incremento y Decremento).
    */
    $c=1;

    do{
        echo $c."<br>";
        $c++;
    }while($c <=20);

    $c2=20;
    do{
        echo $c2."<br>";
        $c2--;
    }while($c2 >=1);

    echo "<br>";
    /* Imprima la tabla de multiplicar de numero dado,
    *desde el factor 1 hasta el 12
    *(Incremento y decremento).
    */

    $num=7;

    $conta=1;
    do{       
        echo $num." X ".$conta." = ".$num*$conta."<br>";
        $conta++;
    }while($conta <= 12);

    echo "<br>";
    $conta2=12;
    do {
        echo $num." X ".$conta2." = ".$num*$conta2."<br>";
        $conta2--;
    } while ($conta2 >= 1);