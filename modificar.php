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
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            background-color: #1b1e21;
        }
        textarea{
            text-align: left;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">Modifica el mensaje</h1>
<div class="text-right" style="padding-right: 10px"><a href="pagina.php" class="btn btn-primary">Volver a mi muro</a></div>
<br>
<form action="modificarmens.php" method="get" class="text-center">
    <textarea name="mensaje" id="mensaje" cols="30" rows="10">
        <?php
        if (isset($_GET["idmens"])){
            $idmens=$_GET["idmens"];
        $mysql = new mysqli("localhost", "user", "user", "mensajeria");
        $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
        $fila= $result->fetch_assoc();
        echo $fila["mensaje"];
        }
        else{
            header('location:index.php');
        }
        ?>
    </textarea>
    <input type='hidden' name='modificar' id='modificar' value='<?=$idmens?>'>
        <br><br>
    <button class="btn btn-primary">Modificar mensaje</button>
</form>
</body>
</html>