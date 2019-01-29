<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<h1>Detalles del mensaje</h1>
<?php
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
    $fila = $result->fetch_assoc();
    echo $fila["mensaje"];
}
?>
</body>
</html>