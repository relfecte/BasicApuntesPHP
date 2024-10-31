<?php
    /*Cuando usamos switch, se usa el comparador de
    * IGUALDA(==), no impora el tipo de dato
    */
    $fruta="Fresa";

    switch ($fruta) {
        case "Fresa":
            echo "Eres una Fresa";
        break;
        case "Pera":
            echo "Eres una Pera";
        break;
        
        default:
            echo "No eres ni Fresa ni Pera";
        break;
    }

    /*Programa que escriba los nombres de los días
    * de la semana en función del valor de la
    *variable DIA.
    *Los dias de la semna son 7. El rango de DIA 
    *es de 1...7, y en caso de que DIA tome un valor
    *fuera de este rango se producirá un mensaje de 
    *ERROR
    */

    $dia=6;

    switch ($dia) {
        case 1:
            echo "Lunes";
        break;
        case 2:
            echo "Martes";
        break;
        case 3:
            echo "Miercoles";
        break;
        case 4:
            echo "Jueves";
        break;
        case 5:
            echo "Viernes";
        break;
        case '6':// $dia=6 == '6'
            echo "Sabado";
        break;
        case "7": // $dia=7 == "7"
            echo "Domingo";
        break;
        default:
            echo "No coincide con ningun dia de la semana";
        break;
    }