<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<h1>Modifica el mensaje</h1>
<form action="modificarmens.php" method="get">
    <textarea name="mensaje" id="mensaje" cols="30" rows="10">
        <?php
        if (isset($_GET["idmens"])){
            $idmens=$_GET["idmens"];
        $mysql = new mysqli("localhost", "user", "user", "mensajeria");
        $result = $mysql->query("SELECT * FROM mensajes WHERE id_mensaje=$idmens");
        $fila= $result->fetch_assoc();
        echo $fila["mensaje"];
        }
        ?>
    </textarea>
    <input type="hidden" name="modificar" id="modificar" value="<?$idmens?>">
    <br><br>
    <button>Modificar mensaje</button>
</form>
</body>
</html>