<?php
    /*
    * and   And(y)
    * or    Or(o)
    * !     Not(no)
    * &&    And(y)
    * ||    Or(o)
    */

    $valor1=7;
    $valor2=2;

    //and && --> solo TRUE cuando TRUE && TRUE = TRUE
    var_dump($valor1==7 and 2>3); // and es lo mismo &&
    var_dump($valor1==7 && 2>3); //FALSE
    var_dump($valor1==7 && $valor2==2);//TRUE
    
    //or || --> solo FALSE cuando FALSE or FALSE = FALSE
    var_dump(2>3 || $valor1==8); // FALSE
    var_dump(2>3 || $valor1==7); //TRUE

    //!FALSE --> TRUE
    //!TRUE --> FALSE
    //Devuelve el valor contrario de la expresión
    var_dump($valor1==$valor2); // FALSE
    //primero comprueva sin los valors son iguales
    // y luego hace el Not, cambiandolo al contrario
    // 7 == 2 --> FALSE , !FALSE --> TRUE
    var_dump(!($valor1==$valor2)); //TRUE
    // primero hace las negaciones de los valores
    // luego comprueba si los resultado son iguales
    // !7 --> FALSE , !2 --> FALSE, FALSE == FALSE--> TRUE
    var_dump(!$valor1==!$valor2); // TRUE

    var_dump($valor1>=$valor2); //TRUE 7 >= 2
    var_dump(!($valor1>=$valor2)); //FALSE
    echo "<br>";
    //Tambien se puede poner en variables
    $resultado=!($valor1>=$valor2); //FALSE
    var_dump($resultado); //FALSE