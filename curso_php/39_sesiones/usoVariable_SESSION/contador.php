<?php
    
    //se crea una cookie PHPSESSID cuando se abre una sesion
    
    //Para cambiar en nombre de sesion:
    session_name("CON");
    //Para cambiar el ID de sesion:
    //session_id("php");
    session_start();

    if (isset($_SESSION["contador"])) {
        $_SESSION["contador"]++;
    } else {
        $_SESSION["contador"]=1;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion en PHP</title>
</head>
<body>
    <?php 
        //echo session_id(); 

        //Las variables de sesion se pueden usar en 
        //todas la pagina que tengan la sesion iniciada
        echo "Has recargado esta pagina ".$_SESSION["contador"]." veces";
    ?>
    <br><br>
    <a href="index.php">Inicio</a>
    <a href="cerrar.php">Eliminar sesion</a>
</body>
</html>