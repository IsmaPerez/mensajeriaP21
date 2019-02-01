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
    <link rel="stylesheet" href="../bootstrap.min.css">
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
<?php
if(isset($_GET["id"])) {
    $idUsu = $_GET["id"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_usuario=$idUsu");
    $result2 = $mysql->query("SELECT * FROM usuarios WHERE id=$idUsu");
    $fila = $result->fetch_assoc();
    $fila2 = $result2->fetch_assoc();
    echo "<h1 class='jumbotron text-center' style='background-color: #0c5460'>Bienvenido al muro de ".$fila2["nombre"]."</h1>";
    if ($fila == NULL) {
        echo "<h5 class='text-center' style='color: white'>No hay mensajes</h5>";
    } else {
        while ($fila) {
            $idmens=$fila["id_mensaje"];
            echo "<div class='jumbotron' id='mensaje'>";
            echo "<h5 class='text-center'>".$fila["mensaje"]."</h5>";
            echo "<br>";
            echo "<div class='text-center'><a href='detalles.php?idmens=$idmens' class='btn btn-primary text-center'>Ver mensaje en detalle</a></div>";
            echo "</div>";
            echo "<br>";
            $fila = $result->fetch_assoc();
        }
    }
}
else{
    header('location:index.php');
}
?>
<br><br>
<div class="text-center">
    <a href="pagina.php" class="btn btn-primary text-center" style="margin: 10px">Volver a mi muro personal</a>
</div>
<br><br>
</body>
</html>