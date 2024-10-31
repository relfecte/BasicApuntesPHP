<?php
    /*Pîda a usuario la edad y genero. para que la
    *computadora le idique si ya puede jubilarse.
    *Tome en cuenta que un Hombre se puede jubilar
    *cuando tenga 60 años o más, en cambio, una
    *mujer mayor se jubilara si tiene más de 54 años.
    */
    
    $edad=55;
    $genero="F";

    if($genero=="M"){
        if($edad >= 60){
            echo "Puede jubilarse";
        } else{
            echo "No puede jubilarse";
        }
    }elseif($genero=="F"){
        if ($edad > 54 ) {
            echo "Puede jubilarse";
        }else{
            echo "No puede jubilarse";
        }
    }else{
        echo "Coloque una opción válida.";
    }