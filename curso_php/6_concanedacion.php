<?php
    $nom="Aleix ";
    $pais="Barcelona";
    $numero=10;

    //Concanedacion es unir dos string/variables o más
    echo $nom.$pais.$numero."<br>";

    $resultado=$nom.$pais.$numero;
    echo $resultado. "<br>";

    echo "Mi nombre es ".$nom. "<br>";

    //Interpolacion: solo con ""
    //mostrar valor de variable dentro de string
    echo "Mi nombre es $nom<br>";
    echo "Mi nombre es {$nom}<br>";
    echo 'Mi nombre es $nom';