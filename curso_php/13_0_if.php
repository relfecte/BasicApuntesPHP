<?php
    //if(expresion){ Codigo a ejecutar;} }
    //if(expresion): Codigo a ejecutar; endif;


    if(1>=0){
        echo "Expresion verdadera<br>";
    }

    if(1>=8){
        //No se ejecuta por que 1>=8 es FALSE
        echo "Expresion verdadera<br>";
    }
    
    //Sintexis usada cuando :
    //se utiliza HTML incrustado con codigo PHP
    if(9>=0):
        echo "Expresion verdadera<br>";
    endif;

