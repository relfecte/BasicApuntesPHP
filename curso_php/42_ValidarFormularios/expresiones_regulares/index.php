<?php
/*EXPRESIONES REGULARES
* -Son una serie de caractéres que definen un patrón de busqueda
* -patrones usados para encontrar uno o varias
*   combinaciones de caracteres en un texto
* -método para realizar búsquedas dentro de 
*   cadenas de caracteres, sin importar la
*    aplitud de la búsqueda
*
* pattern="[a-zA-Z]{3,10}" solo se permite
* de la 'a' a la 'z' y de la 'A' a la 'Z' 
* con un minimo de 3 y un maximo de 10 caracteres
*/
    session_name("LOGIN");
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
    <label >Usuario</label>
    <input type="text" name="usuario" pattern="[a-zA-Z]{3,10}"
    maxlength="10">
    <br>
    <label>Clave</label>
    <input type="password" name="clave" pattern="[a-zA-Z0-9$@.-]{4,30}"
    maxlength="30" required>
    <br><br>
    <button type="submit">Login</button>
    </form>
</body>
</html>