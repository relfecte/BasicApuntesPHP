<?php

$clave="HolaMundo123";

//METODOS ANTIGUOS
echo md5($clave)." ".hash("md5",$clave);
echo "<br>";
echo sha1($clave)." ".hash("sha1",$clave);
echo "<br>";
/*
//Todos los metodos que soporta hash()
foreach(hash_algos() as $algoritmos){
    echo $algoritmos."  -  ".hash($algoritmos,$clave)."<br>";
}
*/
//pasword_hash: No siempre es la misma
//https://www.php.net/manual/es/function.password-hash.php
echo password_hash($clave,PASSWORD_DEFAULT);
echo "<br>";
echo password_hash($clave,PASSWORD_BCRYPT, ['cost'=>11]);
echo "<br>";

//Verificacion del hash
//https://www.php.net/manual/es/function.password-verify.php
$clave_procesado=password_hash($clave,PASSWORD_BCRYPT, ['cost'=>11]);

if(password_verify($clave,$clave_procesado)){
    echo "Las claves coinciden<br>";
}

$clave2="1234567";
if(password_verify($clave2,$clave_procesado)){
    echo "Las claves coinciden<br>";
}else{
    echo "Las claves no coinciden<br>";
}
