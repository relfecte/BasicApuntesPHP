<?php
include("33_formularioPOSTGET.html");
/*
//Los datos van ocultos
$nombre= $_POST["nombre"];
$asignatura= $_POST["asignatura"];
$frutas= $_POST["frutas"];
*/

//index.php?nombre=afg&asignatura=Ingles&frutas=Manzana
$nombre= $_GET["nombre"];
$asignatura= $_GET["asignatura"];
$frutas= $_GET["frutas"];
echo $nombre." - ".$asignatura." - ".$frutas;
