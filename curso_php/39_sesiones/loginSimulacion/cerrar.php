<?php

    session_name("LOGIN");
    session_start();

    //sesion_unset();--> elimina las variables de sesion
    //unset($_SESSION["Nombre"]);--> podemos eliminar solo una variable de sesion
    session_destroy();// elimina la sesion