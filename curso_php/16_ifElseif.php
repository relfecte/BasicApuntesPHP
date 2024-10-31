<?php
//En esta sintaxis el elseif y else if son lo mismo
//if(){}elseif(){}else{};
//if(){}else if(){}else{};
//en la siguiente sintexis el elseif siempre JUNTO
//if(): elseif(): else: endif;

    /* Se desea diseñar un programa que escriba los
    *numero de los días de la semana en función del
    *valor de una variable DIA.
    */
    $dia = 0;
    if($dia==1){
        echo "Lunes";
    }else if($dia==2){
        echo "Martes";
    }elseif($dia==3){
        echo "Miercoles";
    }elseif($dia==4){
        echo "Jueves";
    }elseif($dia==5){
        echo "Viernes";
    }elseif($dia==6){
        echo "Sabado";
    }elseif($dia==7){
        echo "Domingo";
    }else{
        echo "No corresponde a ningun dia de la semana";
    }

    /* En una fábrica de computadoras se planea ofrecer
    * a los clientes un descuento que dependerá del
    * número que dompre. Si las computadoras son menos
    * de cinco se les dará un 10% de descunto sobre el
    * el total de la compra; si el número de computadoras
    * es mayor o igual a cinco pero menos de diez se le
    * otorga un 20% de descuento; y si son 10 o mñas se
    * les d aun 40% de descuento. El precio de cada 
    * computadora es de 700$
    */

    $numCompu= 3;
    $precio= $numCompu*700;

    if ($numCompu < 5) {
        $total = $precio-($precio*0.1);
    } elseif($numCompu >= 5 && $numCompu < 10) {
        $total = $precio-($precio*0.2);
    }elseif($numCompu >= 10){
        $total = $precio-($precio*0.4);
    }
    echo "El precio total es de $total USD";
    



    