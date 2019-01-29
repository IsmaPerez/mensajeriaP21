<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
<h1>Mensaje Seleccionado</h1>
<?php
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
    $fila= $result->fetch_assoc();
    echo $fila["mensaje"];
    echo "<a href='eliminar.php?idmens=$idmens'>Eliminar</a>";
}
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    echo "<h4>¿Seguro que desea eliminar el mensaje?</h4>";
    echo "<a href='pagina.php'>Cancelar</a>";
    echo "<a href='eliminado.php?idmens=$idmens'>Eliminar</a>";
}
?>
</body>
</html>