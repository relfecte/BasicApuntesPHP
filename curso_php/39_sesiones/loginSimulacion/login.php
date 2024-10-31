<?php

if($_POST["usuario"]=="Aleix" && $_POST["clave"]=="1234"){
    session_name("LOGIN");
    session_start();
    
    $_SESSION["Nombre"]="Aleix";
    $_SESSION["Apellido"]="Busquets";
    $_SESSION["Pais"]="España";

    echo "Sesion iniciada";
}else{
    echo "Datos incorrectos";
}