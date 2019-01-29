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
<?php
if(isset($_GET["id"])) {
    $idUsu = $_GET["id"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("SELECT * FROM mensajes WHERE id_usuario=$idUsu");
    $result2 = $mysql->query("SELECT * FROM usuarios WHERE id=$idUsu");
    $fila = $result->fetch_assoc();
    $fila2 = $result2->fetch_assoc();
    echo "<h1>Bienvenido al muro de ".$fila2["nombre"]."</h1>";
    if ($fila == NULL) {
        echo "<p>No hay mensajes</p>";
    } else {
        while ($fila) {
            $idmens=$fila["id_mensaje"];
            echo $fila["mensaje"];
            echo "<br>";
            echo "<a href='detalles.php?idmens=$idmens' >Ver mensaje en detalle</a>";
            echo "<br><br>";
            $fila = $result->fetch_assoc();
        }
    }
}
?>
<br><br>
<a href="pagina.php">Volver a mi muro personal</a>
</body>
</html>