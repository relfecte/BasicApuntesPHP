<?php
    /* Operadores de Asignacion
    * Asignar               =   $a=10;
    * Sumar y asignar       +=  $a+=10;
    * Restar y asignar      -=  $a-=10;
    *   Multiplicar y asignar *=  $a*=10;
    * dividir y asignar     /=  $a/=10;
    * Concadenar y asignar     .=  $a.=" es el valor A";
    * $a+=10; es lo mismo que $a=$a+10;
    */

    $num1=5;
    echo $num1. "<br>";//5

    $num1+=5;
    //Tambien se puede hacer asi--> $num1=$num1+5
    echo $num1. "<br>";//10

    $num1-=2;   
    echo $num1. "<br>";//10 -2 = 8

    $num1*=2;
    echo $num1. "<br>";//8 * 2 = 16

    $num1/=2;
    echo $num1. "<br>";//16 / 2 = 8

    $num1=2;
    echo $num1. "<br>";//8 * 2 = 16

    $num2="Texto de prueba ";
    $num2.=2;
    echo $num2. "<br>";

    $num3="Texto de prueba ";
    $num3.="Otro texto más";
    echo $num3. "<br>";
    

