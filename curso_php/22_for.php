<?php
/*for(var; Condicion; incre | decre){
*   Código a ejecutar
*}
*
*for(var; Condicion, incre | decre):
*   Código a ejecutar
*enfor;
*/

/*Imprima los números del 1 al 20
*(Incremento y Decremento).
*/
for($i=1; $i <= 20; $i++){
    echo $i."<br>";
}

for($i=20; $i >= 1; $i--){
    echo $i,"<br>";
}

/* Imprima la tabla de multiplicar de numero dado,
*desde el factor 1 hasta el 12
*(Incremento y decremento).
*/
$num=7;
for($i=1; $i <=12; $i++){
    echo $num." X ".$i." = ".$num*$i."<br>";
}
echo "<br>";

for($i=12; $i >= 1; $i--){
    echo $num." X ".$i." = ".$num*$i."<br>";
}