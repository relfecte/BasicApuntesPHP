<?php

//ZONA HORARIA
//https://www.php.net/manual/es/function.date-default-timezone-set.php
//FUNCION DATE
//https://www.php.net/manual/es/function.date.php

//determinar la zona horaria
date_default_timezone_set("Europe/Madrid");

//dia en numeros con zeros iniciales
echo date("d")."<br/>";
//dia en numeros sin zeros iniciales
echo date("j")."<br/>";
//nombre del dia en ingles
echo date("l")."<br/>";

//Fecha US
$fechaUS=date("Y-m-d");
echo $fechaUS."<br/>";
$fechaUS=date("Y/m/d");
echo $fechaUS."<br/>";
//Fecha US representacion textual
$fechaUS=date("l d F Y");//EJ:Monday 21 October 2024
echo $fechaUS."<br/>";

//Fecha español
$fechaES=date("d-m-Y");
echo $fechaES."<br/>";

//Hora
//formato de 12 horas
$hora_12=date("h:i a");
echo $hora_12."<br/>";
//fromato de 24 horas
$hora_24=date("H:i");
echo $hora_24."<br/>";

//Fecha completa
$fechaCompleta=date("d-m-Y h:i a");
echo $fechaCompleta."<br/>";
//Fecha completa representacion textual
$fechaCompleta=date("l d F Y H:i");
echo $fechaCompleta."<br/>";
