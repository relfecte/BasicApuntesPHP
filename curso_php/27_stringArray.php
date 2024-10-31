<?php

$fecha1="2021/11/29";
$fecha2="2021-11-30";
$numero= "Uno Dos Tres Cuatro Cinco Seis Siete";

//delimitador
$array_fecha=explode("/",$fecha1);
echo $array_fecha[0]."<br/>";

$array_fecha2=explode("-",$fecha2);
echo $array_fecha2[0]."<br/>";

$array_numero=explode(" ",$numero);
echo $array_numero[0]."<br/>";
echo "<br/>";
//limitador
$array_numero=explode(" ",$numero,2);
echo $array_numero[0]."<br/>";
echo $array_numero[1]."<br/>";

echo "<br/>";

$array_numero=explode(" ",$numero,-2);
echo $array_numero[0]."<br/>";
echo $array_numero[4];
//echo $array_numero[5]; No muestra nada, no existe