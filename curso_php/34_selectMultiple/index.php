<?php

var_dump($_POST['asignatura']);
echo "<br>";

$materias=$_POST['asignatura'];
foreach($materias as $asignatura){
    echo $asignatura."<br/>";
}
echo"<br><br><br>";
// Verificar si se ha enviado el formulario y si el array 'frutas' está definido
if (isset($_POST['frutas'])&& is_array($_POST['frutas'])) {
    
    $fresa=$_POST['frutas'];
    foreach($fresa as $fruta){
        echo $fruta."<br>";
    }
}else{
    echo "No se ha seleccionado ninguna fruta";
}
