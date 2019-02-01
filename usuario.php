<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        body{
            background-color: #1b1e21;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">¿A quién buscas?</h1>
<?php
if (isset($_GET["nombre"]) || isset($_GET["apellido"]) || $_GET["login"]){
    $nombre=$_GET["nombre"];
    $apellido=$_GET["apellido"];
    $login=$_GET["login"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result=$mysql->query("SELECT * FROM usuarios");
    $fila=$result->fetch_assoc();
    if ($nombre!=$fila["nombre"] && $apellido!=$fila["apellido1"] && $login!=$fila["login"]){
        echo "<h5 class='text-center' style='color: white'>No se han encontrado resultados</h5>";
        echo "<br>";
        echo "<div class='text-center'><a href='buscar.php' class='btn btn-primary'>Volver a intentar</a></div>";
    }
    while($fila){
        $idUsu=$fila["id"];
        if ($nombre==$fila["nombre"] || $apellido==$fila["apellido1"] || $login==$fila["login"]){
            echo "<a href='muroinvitado.php?id=$idUsu'><h5 style='padding-left: 20px'>".$fila["nombre"]." ".$fila["apellido1"]."</h5></a>";
            echo "<br>";
        }
        $fila=$result->fetch_assoc();
    }
}
else{
    header('location:index.php');
}
?>
</body>
</html>
