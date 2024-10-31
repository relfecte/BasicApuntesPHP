<?php
//Operador ternario, es como una sentencia IF/ELSE
/*Se usa para realizar operciones 
*sencillas en una sola linea
*/
    //si 9>7 --> TRUE se hace 10*7
    //si 9>7 --> FALSE se hace 10*5
    (9>7) ? 10*7 : 10*5;
    
    //no se puede poner echo dentro del operado ternario
    //PARA USARLO, GUARDAMOS LOS RESULTADON EN UNA VARIABLE
    (9>7) ? $total=10*7 : $total=10*5;
    echo $total;

    //tambien podemos hacerlo de la siguente forma:
    $total2= (9>7) ? 10*7 : 10*5;
    echo $total2;

    /* Hacer un programa que cacule el total a pagar
    * por la compra de camisas. Si se compran tres
    * o más se aplica una descuento del 20% sobre el
    * total de la compra y si son menos de tres
    * camisas un descuento del 10%
    */

    $camisas= 6;
    $precioCamisa = 10;

    $totalPrecio = $camisas*$precioCamisa;

    $totalPagar=($camisas >= 3) 
    ? $totalPrecio-($totalPrecio*0.2) 
    : $totalPrecio-($totalPRecio*0.1);
    
    echo "El valos a pagar por las $camisas es: $totalPagar";