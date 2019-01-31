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
        form{
            padding-top: 20px;
            padding-bottom: 20px;
            margin: 0 auto;
            border: 1.5px solid white;
            max-width: 80%;
            border-radius: 5em;
        }
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">Iniciar sesión</h1>
<div class="text-right" style="padding-right: 10px"><a href="index.php" class="btn btn-primary">Volver a pagina inicial</a></div>
<br>
<div>
    <form action="iniciado.php" method="post" class="text-center">
        <label for="login">Login</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>
        <br><br>
        <button class="btn btn-primary">Enviar</button>
    </form>
</div>
<br><br>
<?php
if (isset($_GET["error"])){
    echo "<p class='alert-danger'>Fallo en la conexión con la base de datos</p>";
}
?>
</body>
</html>