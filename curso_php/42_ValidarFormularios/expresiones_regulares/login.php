<?php

//preg_match("/^[patron]{catidad}$/", variableString)-->
//comprueba que cumpla con el patron
//"/^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ() ]{3,10}$/"
if(!preg_match("/^[a-zA-Z]{3,10}$/",$_POST["usuario"])){
    echo "El usuario no coincide con el formato solicitado";
    exit();
}

if(!preg_match("/^[a-zA-Z0-9$@.-]{4,30}$/",$_POST["clave"])){
    echo "La clave no coincide con el formato solicitado";
    exit();
}

if($_POST["usuario"]=="Aleix" && $_POST["clave"]=="1234"){
    session_name("LOGIN");
    session_start();
    
    $_SESSION["Nombre"]="Aleix";
    $_SESSION["Apellido"]="Busquets";
    $_SESSION["Pais"]="España";

    /*Para que funcione:
    *No debe haber etiquetas html
    *o salidas de texto o espacios
    *
    *es decir--> echo ""; dara error
    */
    //header("Location: contador.php");
    
    //Para que funcione si hay etiquetas html o salidas textos o espacios
    if(headers_sent()){
        echo "<script>window.location.href='contador.php';</script>";
    }else{
        header("Location: contador.php");
    }
}else{
    echo "Datos incorrectos";
}