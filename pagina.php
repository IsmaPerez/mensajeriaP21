<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<h1>Bienvenido a tu muro personal</h1>
<?php
session_start();
if(isset($_SESSION["usuario"])) {
    $idUsu = $_SESSION["usuario"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_usuario=$idUsu");
    $fila = $result->fetch_assoc();
    if ($fila == NULL) {
        echo "<p>No hay mensajes</p>";
    } else {
        while ($fila) {
            $idmens=$fila["id_mensaje"];
            echo $fila["mensaje"];
            echo "<br>";
            echo "<a href='modificar.php?idmens=$idmens' >Modifica el mensaje</a>";
            echo "<a href='eliminar.php?idmens=$idmens'>Eliminar mensaje</a>";
            echo "<br><br>";
            $fila = $result->fetch_assoc();
        }
    }
}
    ?>
<br><br>
<a href="añadir.php">Añadir Mensaje</a>
<a href="buscar.php">Buscar</a>
</body>
</html>