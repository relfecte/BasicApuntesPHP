<!DOCTYPE html>
<html lang="en">
<head>
       <title>Document</title>
</head>
<body>
<!--action="<?php //echo $_SERVER['PHP_SELF'];?>"-->
<!--action="<?php //$_SERVER['PHP_SELF'];?>"-->
    <form action="" method="POST">
        <input type="text" name="numero">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if(isset($_POST["numero"]) && $_POST["numero"]!=""){
            include "index2.php";
        }
    ?>
</body>
</html>