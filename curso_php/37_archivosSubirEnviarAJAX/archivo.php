<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargra de archivo</title>
</head>
<body>
    <h3>Subir archivo con PHP</h3>
<!--Para enviar archivos solo se puede hacer con POST-->
    <form action="carga.php" method="POST" enctype="multipart/form-data" 
    class="formularioAjax">
<!--accept=".jpg, .png, .jpeg"> limitamos los tipos de archivos-->
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <form action="carga.php" method="POST" enctype="multipart/form-data" 
    class="formularioAjax">
<!--accept=".jpg, .png, .jpeg"> limitamos los tipos de archivos-->
        <input type="file" name="fichero" accept=".jpg, .png, .jpeg">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <script src="ajax.js"></script>
</body>
</html>