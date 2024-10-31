<?php
$num=NULL;

if(is_null($num)){
    echo "Es nula";
}else{
    echo "No es nula";
}

//Da warning porque la var $num1 no esta definida
//Entra al conficional y nos da nula
$num1;
if(is_null($num1)){
    echo "Es nula";
}else{
    echo "No es nula";
}

$num1=9;

unset($num1);//eliminamos la variable

if(is_null($num1)){
    echo "Es nula";
}else{
    echo "No es nula";
}

echo "<br><br><br>";

//empty
$num1=9;

if(empty($num1)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}
$num1=0;

if(empty($num1)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}

//en la url--> 
//?numero=  --> Esta vacia
//?numero=15  --> No esta vacia
$numero=$_GET["numero"];

if(empty($numero)){
    echo "Esta vacia";
}else{
    echo "No esta vacia";
}

echo "<br><br><br>";

//isset
//?numero=  --> Esta definida
//?numero=null --> No esta definida
$numero=$_GET["numero"];

if(empty($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}

$numero=7;

unset($numero);
if(empty($numero)){
    echo "Esta definida";
}else{
    echo "No esta definida";
}