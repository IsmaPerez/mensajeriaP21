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
        label{
            color: white;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">¿A quién estas buscando?</h1>
<form action="usuario.php" method="get" class="text-center">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br><br>
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">
    <br><br>
    <label for="login">Login</label>
    <input type="text" name="login" id="login">
    <br><br>
    <button class="btn btn-primary">Buscar</button>
    <br><br>
</form>
</body>
</html>