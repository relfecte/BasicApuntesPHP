<?php
/* while(Condicion) {
*codigo
*}
*
* while(Condicion): 
*    codigo 
*endwhile;
*/
    /* Imprima los números del 1 hasta el 20
    *(Incremento y decremento).
    */
    $c=1;
    while($c <= 20){
        echo $c."<br>";//1...20
        $c++;
    }

    echo "<br>";

    $c2=20;
    while($c2 >= 1){
        echo $c2."<br>";//20...1
        $c2--;
    }
    echo "<br>";
    /* Imprima la tabla de multiplicar de numero dado,
    *desde el factor 1 hasta el 12
    *(Incremento y decremento).
    */

    $num=7;

    $contador=1;
    while($contador <=12){
        echo $num." X ".$contador." = ". $num*$contador."<br>";
        $contador++;
    }

    echo "<br>";

    $contador2=12;
    while($contador2 >=1){
        echo $num." X ".$contador2." = ". $num*$contador2."<br>";
        $contador2--;
    }
    