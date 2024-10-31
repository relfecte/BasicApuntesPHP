<?php
//function: reutulizar codigo que haga una tare en especifico
    function saludo(){
        echo "Hola, mi nombre es: Aleix";
    }

    saludo();
    
    //si queremos guarfarlo en una variable:
    function saludo2(){
        return "Hola, mi nombre es: Aleix";
    }

    //si llamamo a la funcion no saldra por pantalla
    //lo que nos debuelve es un valor
    echo saludo();
    $saludo=saludo2();
    echo $saludo;

    function saludo3($nombre){
        return "Hola, mi nombre es: $nombre";
    }

    echo saludo3("Anna");

    $usuario="Ashley";
    echo saludo3("$usuario");

    echo saludo3($nombre="Salva");

    //OTRO EJEMPLO

    function promedio_alumno($nota1,$nota2,$nota3){
        $promedio=($nota1+$nota2+$nota3)/3;
        return $promedio;
    }

    $promedio=promedio_alumno(7,9,6);
    echo "El promedio es: ".$promedio;
    echo "El promedio es: ".promedio_alumno(7,9,6);

