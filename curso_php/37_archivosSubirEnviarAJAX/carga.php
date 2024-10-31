<?php
/*
echo $_FILES["fichero"]["name"]."<br>";//nombre
echo $_FILES["fichero"]["tmp_name"]."<br>";//ruta temporal del archivo
echo $_FILES["fichero"]["type"]."<br>";//tipo del archivo
echo $_FILES["fichero"]["error"]."<br>";//errores
echo $_FILES["fichero"]["size"]."<br>";//tamaño en bytes
*/
if(mime_content_type($_FILES["fichero"]["tmp_name"])!="image/jpeg" &&
    mime_content_type($_FILES["fichero"]["tmp_name"])!="image/png"){
    echo "Tipo de fichero no admitido";
    exit();
}

//limitar peso de archivos
//$_FILES["fichero"]["size"]/1024--> peso en kB
//3072--> 3 megas MB
if(($_FILES["fichero"]["size"]/1024)>3072){
    echo "El archivo supera el peso admitido";
    exit();
}

if(!file_exists("archivos")){
    if(!mkdir("archivos",0777)){//0777 todos los permisos de escritura y lectura para la carpeta
        echo "Error al crear el driectorio:";
        exit();
    }
}

//darle permisos
chmod("archivos",0777);

if(move_uploaded_file($_FILES["fichero"]["tmp_name"],"archivos/".$_FILES["fichero"]["name"])){
    echo "Arcgivo subido con exito";
}else{
    echo "Error al subir el archivo";
}