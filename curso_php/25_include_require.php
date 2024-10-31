<?php
/*Ambas funciones sirven para añadir ficheros a
*nuestros scripts en PHP
*
*Include: inserta en nuestro script un código 
*procedente de otro archivo, si no existe dicho
*archivo o si contiene algún tipo de error nos
*mostrará un 'warning' por pantalla y el 
*script seguirá ejecutándose.
*
*include("ruta_archivo.php");
*include "ruta_archivo.php";
*
*include_once("ruta_archivo.php");
*include_once "ruta_archivo.php";
*
*
*require: hace la misma operación que el include
*pero en caso de no existir el archivo o error en
*el mismo mostará un 'fatal error' y el script
*no se sigue ejecutando.
*
*require("ruta_archivo.php");
*require "ruta_archivo.php";
*require_once("ruta_archivo.php");
*require_once "ruta_archivo.php";
*/

    include("1_comentarios.php");
    include "1X_comentarios.php";//nos da el warning, pero sigue ejecutandose
    include "1_comentarios.php"; // con include sigue ejecutando

    require ("1_comentarios.php");
   /* require "22X_for.php"; //nos da un fatal error, y se termina la ejecución
   * require "22_for.php"; //ya no aparece debido al de arriba
   */

   //al usar once, el codigo solo sale una vez!!
    require_once ("1_comentarios.php");
    include_once ("1_comentarios.php");

    