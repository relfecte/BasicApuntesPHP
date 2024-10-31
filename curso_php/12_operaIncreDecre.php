<?php
    /*
    * ++        Incremento
    * --        Decremento
    *
    * ++$var    Pre-Incremento
    * $var++    Post-Incremento
    * --$var    Pre-Incremento
    * $var--    Post-Incremento
    */

    $num=10;

    //primero incrementa y luego hace la acción
    echo $num;// 10
    echo ++$num;// 11

    //primero hace la acción echo y luego incremente
    echo $num++;// 11
    echo $num;// 12

    echo --$num; // 11
    echo $num--; // 11
    echo $num;//10

    echo "<br>";

    $num1=10;
    $resultado=++$num1;//num1 = 10 + 1 y resultado = num1(11)
    echo $resultado;//11
    echo $num1;//11
    $resultado2=$num1++;// resultado = num1(11) y num1= 11 + 1
    echo $resultado2;//11
    echo $num1;//12

    