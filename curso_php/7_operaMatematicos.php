<?php
    /* Operadores aritméticos
    * Suma +
    * Resta -
    * Division /
    * Resto de(modulo o residuo) %
    * Multiplicacion *
    * Exponenciación **
    */

    /* Jerarquia 
    * 1 () Se ejecuta primero
    * 2 ** Despues de ()
    * 3 *,/ Después de los anteriores
    * 4 +,- Después de los anteriores
    * 5 % Déspues de los anteriores
    * si son iguales se hace de izquierda a derecha
    */

    $num1=5;
    $num2=2;
    
    echo $num1+$num2."<br>"; //7
    echo $num2+10; //12
    echo "<br>";

    $resultado=$num1+$num2;
    echo $resultado."<br>"; //7
    $resultado=$num1-$num2;
    echo $resultado."<br>"; //3
    $resultado=$num1/$num2;
    echo $resultado."<br>"; //2.5
    $resultado=$num1*$num2;
    echo $resultado."<br>"; //10
    $resultado=$num1**$num2;
    echo $resultado."<br>"; //25

    //% -->solo para divisiones enteras
    $num3=10;
    $num4=3;

    $resultado2=$num3%$num4;
    echo $resultado2."<br>";//1


    //JERARQUIA
    $resultado3=7-4+($num1*$num2)/$num2;

    /*7-4+(5*2)/2
    *7-4+10/2
    *7-4+5
    *3+5
    *8
    */
    echo $resultado3; //8
    