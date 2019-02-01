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
        h4{
          color: white;
        }
        #eliminar{
            margin-left: 6em;
        }
        #mensaje{
            max-width: 60%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">Mensaje Seleccionado</h1>
<?php
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    echo "<h4 class='text-center'>¿Seguro que desea eliminar este mensaje?</h4>";
    echo "<br>";
}
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
    $fila= $result->fetch_assoc();
    echo "<div class='jumbotron text-center' id='mensaje'>";
    echo "<h5>".$fila["mensaje"]."</h5>";
    echo "</div>";
    echo "<br>";
    echo "<div class='text-center'>";
    echo "<a href='pagina.php' class='btn btn-primary'>Cancelar</a>";
    echo "<a href='eliminado.php?idmens=$idmens' class='btn btn-primary' id='eliminar'>Eliminar</a>";
    echo "</div>";
}
?>
</body>
</html>