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
<h1>Estas buscando a:</h1>
<?php
if (isset($_GET["nombre"]) || isset($_GET["apellido"]) || $_GET["login"]){
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $login=$_GET["login"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result=$mysql->query("SELECT * FROM usuarios");
    $fila=$result->fetch_assoc();
    while($fila){
        $idUsu=$fila["id"];
        if ($nombre==$fila["nombre"] || $apellido==$fila["apellido1"] || $login==$fila["login"]){
            echo "<a href='muroinvitado.php?id=$idUsu'>".$fila["nombre"]." ".$fila["apellido1"]."</a>";
        }
        $fila=$result->fetch_assoc();
    }
}
else{
    header('location:buscar.php');
}
?>
</body>
</html>
