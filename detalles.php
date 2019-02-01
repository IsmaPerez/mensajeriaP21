<?php
session_start();
if (!isset($_SESSION["iniciado"])){
    header('location:index.php');
}
?>

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
        #mensaje{
            max-width: 60%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">Detalles del mensaje</h1>
<?php
session_start();
if (isset($_GET["idmens"])){
    $idUsu=$_SESSION["usuario"];
    $idmens=$_GET["idmens"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
    $result2=$mysql->query("SELECT SUM(voto) as SUMA FROM votaciones WHERE id_mensaje=$idmens");
    $result3=$mysql->query("SELECT COUNT(voto) as CUENTA FROM votaciones WHERE id_mensaje=$idmens");
    $fila = $result->fetch_assoc();
    $fila2=$result2->fetch_assoc();
    $fila3=$result3->fetch_assoc();
    $media=($fila2["SUMA"]/$fila3["CUENTA"]);
    echo "<div class='jumbotron text-center' id='mensaje'>";
    echo "<h5>".$fila["mensaje"]." </h5>";
    echo "<p id='media'class='alert-danger'><em>Este mensaje tiene una media de ".$media." puntos</em></p>";
    echo "</div>";
    echo "<br>";
    echo "<div class='text-center'><a href='votacion.php?idmens=$idmens' class='btn btn-primary' id='votar'>Votar mensaje</a></div>";
}
else{
    header('location=index.php');
}
?>
</body>
</html>