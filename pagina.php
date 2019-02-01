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
        #img{
            width: 20px;
            height: 20px;
        }
        #mensaje{
            max-width: 60%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-sm-center" style="background-color: #0c5460">Bienvenido a tu muro personal</h1>
<div class="text-center">
    <a href="añadir.php" class="btn btn-primary text-left">Añadir Mensaje</a>
    <a href="buscar.php" class="btn btn-primary text-right" style="margin-left: 20em">Buscar Usuario <img src="Imgs/usuario.png"
                                                                                                          alt="usuario" id="img"></a>
</div>
<br><br>
<?php
session_start();
if ( $mysql = new mysqli("localhost", "user", "user", "mensajeria")){
    if(isset($_SESSION["usuario"])) {
        $idUsu = $_SESSION["usuario"];
        $result = $mysql->query("SELECT * FROM mensajes WHERE id_usuario=$idUsu");
        $fila = $result->fetch_assoc();
        if ($fila == NULL) {
            echo "<p>No hay mensajes</p>";
        } else {
            while ($fila) {
                $idmens=$fila["id_mensaje"];
                echo "<div class='jumbotron' id='mensaje'>";
                echo "<h5 class='text-center'>".$fila["mensaje"]."</h5>";
                echo "<br>";
                echo "<div class='text-center'>";
                echo "<a href='modificar.php?idmens=$idmens' class='btn btn-primary text-center'>Modifica el mensaje</a>";
                echo "<a href='eliminar.php?idmens=$idmens' class='btn btn-primary text-center' style='margin-left: 10px'>Eliminar mensaje</a>";
                echo "</div>";
                echo "</div>";
             echo "<br><br>";
             $fila = $result->fetch_assoc();
            }
        }
    }else{
        header('location:index.php');
    }
}else{
    echo $error=1;
    header('location:iniciar.php?error=1');
}
    ?>
<br><br>
</body>
</html>