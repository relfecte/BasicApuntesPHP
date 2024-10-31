<?php
    //setcookie("Nombre", valor, expiracion, dir
    //,dominio, secure, httponly);

    //valor --> debe estar entre comillas para que sea una cadena de texto
    //expiracion--> time()60segundos*60minutos*24horas*30dias
    //60*60--> 1 hora 60*60*24--> 1 dia 60*60*24*30--> 30 dias
    //60*60*24*365--> 1 año
    //dir--> "/" local, la carpeta raiz
    setcookie("Idioma", "es"/*valor*/,time()+60,"/"
    ,"localhost",false,false);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1><?php echo $_COOKIE['Idioma']?></h1>
</body>
</html>