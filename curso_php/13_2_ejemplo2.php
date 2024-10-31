<?php
    /*1.Realizaar un programa en donde se pida la edad
    * del usuario; si es mayor debe aparecer un mensaje
    * indicándolo.
    */
    $edad=20;
    //solo se hara si la condicion es TRUE
    if($edad>=18){
        echo "Es mayor de edad";
    }
    //tambien podemos usar
    if($edad>=18):
        echo "Es mayor de edad";
    endif;

    /* En un almacén se hace un 20% de descuento a los
    * clientes cuya compra supere los $100 ¿Cuál será
    * la cantidad que pagará una persona por su compra?
    */
    
    $total=120;

    if($total > 100){
        $total=$total-($total*0.20);
    }

    echo "El total a pagar es de: $" .$total;
    echo "El total a pagar es de: $ {$total}";
