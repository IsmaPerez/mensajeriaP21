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
session_start();
if (isset($_GET["idmens"])){
    $idUsu=$_SESSION["usuario"];
    $idmens=$_GET["idmens"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
    $result2=$mysql->query("SELECT SUM(voto) as SUMA FROM votaciones WHERE id_mensaje='.$idmens.'");
    $result3=$mysql->query("SELECT COUNT(voto) as CUENTA FROM votaciones WHERE id_mensaje='.$idmens.'");
    $fila = $result->fetch_assoc();
    $fila2=$result2->fetch_assoc();
    $fila3=$result3->fetch_assoc();
    $media=($fila2["SUMA"]/$fila3["CUENTA"]);
    echo "<h5>".$fila["mensaje"]." </h5>";
    echo "<p><em>Este mensaje tiene una media de ".$media." votos</em></p>";
    echo "<br>";
    echo "<a href='votacion.php?idmens=$idmens'>Votar mensaje</a>";
}
else{
    header('location=muroinvitado.php');
}
?>
</body>
</html>