<?php
    /*Constantes: no se pueden alterar/modificar
    * Siguen las mismas reglas que las variables
    * WRNING: NO EMPIEZAN CON $
    * Empiezan con una letra o _
    * Se definen en mayusculas
    */


    //Definir constante, sintaxis antigua
    //SE USA FUERA DE CLASES
    define("NOMBRE","Aleix");
    echo NOMBRE. "<br>";
    /* Si intentamos cambiar su valor:
    *define("NOMBRE",10);
    *echo NOMBRE;
    *Nos saldra por pantalla:
    *Warning: Constant NOMBRE already defined
    */
    
    //Definir contante, sintaxis actual
    //SE USA DENTRO DE CLASES
    const APELLIDO="Busquets";
    echo APELLIDO. "<br>";

    //Definir contate de ARRAY

    define("ALUMNOS",array("Aleix", "Salva", "Amanada"));
    echo ALUMNOS[0];