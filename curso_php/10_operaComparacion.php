<?php
    /*
    * 1 == "1"      ==(Igual)               TRUE
    * 10 === "10"   ===(Idéntico)           FALSE
    * 7 != "7"      !=(Diferente)           FALSE
    * 21 <> "21"    <>(Diferente)           FALSE
    * 19 !== "19"   !==(No idéntico)        TRUE
    * 7 < 4         <(Menar que)            FALSE
    * 7 > 4         >(Mayor que)            TRUE
    * 2 <= 2        <=(Menor o igual que)   TRUE
    * 3 >= 7        >=(Mayor o igual que)   FALSE
    */

    echo (1=="1")."<br>"; // TRUE o 1
    var_dump(1=="1")."<br>";//bool(true)
    var_dump(2=="1")."<br>";//bool(false)
    
    $num1=2;
    var_dump($num1=="1")."<br>";//bool(false)