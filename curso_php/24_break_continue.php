<?php

    $c=1;
    while ($c <= 20) {
        echo $c."<br>";
        if ($c==10) {
            break;
        }     
        $c++;
    }


    echo "<br>";

    $pc=["SO","SSD","GPU","RAM","CPU"];
    //Se mostrara GPU y se parara
    foreach ($pc as $componente) {
        echo $componente."<br>";
        if ($componente=="GPU") {
            break;
        }
    }
    echo "<br>";
    //se parara antes de mostrar GPU
    foreach ($pc as $componente) {
        if ($componente=="GPU") {
            break;
        }
        echo $componente."<br>";
    }
    echo "<br>";
    //GPU no se va a mostrar, poner el echo despues
    foreach ($pc as $componente) { 
        if ($componente=="GPU") {
            continue;
        }
        echo $componente."<br>";
    }

    echo "<br>";


    for ($i=1; $i <=10 ; $i++) { 
        if ($i==5) {
            continue;
        }
        echo $i."<br>";
    }
    
    echo "<br>";

    $i=1;
    while ($i <= 10) {
        if ($i==5) {
            $i++;//IPORTANTE:si no incrementamos-->$i=5
            continue;
        }
        echo $i."<br>";
        $i++;
    }