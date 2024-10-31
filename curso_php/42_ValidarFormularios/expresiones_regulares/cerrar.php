<?php

    session_name("LOGIN");
    session_start();

    
    session_destroy();// elimina la sesion

    //REDIRECCIONAMIENTO CON JAVASCRIPT
    //funcionario igual si ;
    //echo "<script>window.location.href='index.php';</script>";

    if(headers_sent()){
        echo "<script>window.location.href='index.php';</script>";
    }else{
        header("Location: index.php");
    }