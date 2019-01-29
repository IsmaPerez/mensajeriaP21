<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap.min.css">
</head>
<body>
<h1>Iniciar sesión</h1>
<div>
    <form action="iniciado.php" method="post">
        <label for="login">Login</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>
        <br><br>
        <button>Enviar</button>
    </form>
</div>
<br><br>
<a href="index.php">Volver a pagina inicial</a>
</body>
</html>