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
    </style>
</head>
<body>
<h1 class="jumbotron text-center" style="background-color: #0c5460">Escriba un mensaje en su muro</h1>
<form action="añadirmens.php" method="get" class="text-center">
    <textarea  name="mensaje" id="mensaje" placeholder="¿Que desea escribir?" cols="30" rows="10"
               class="border-dark" style="background-color: lightgray"></textarea>
    <br><br>
    <button class="btn btn-primary">Enviar mensaje</button>
</form>
</body>
</html>