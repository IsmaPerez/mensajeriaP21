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
<h1 class="text-center">Registrarse en la página</h1>
<br>
<div>
    <form action="registrado.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="apellido1">Apellido 1</label>
        <input type="text" id="apellido1" name="apellido1" required>
        <br><br>
        <label for="apellido2">Apellido 2</label>
        <input type="text" id="apellido2" name="apellido2" required>
        <br><br>
        <label for="login">Login</label>
        <input type="text" id="login" name="login" required>
        <br><br>
        <label for="pass">Contraseña</label>
        <input type="password" id="pass" name="pass" required min="8">
        <br><br>
        <label for="passc">Confirmar contraseña</label>
        <input type="password" id="passc" name="passc" required min="8">
        <br><br>
        <button>Enviar</button>
    </form>
    <br>
    <?php
    if (isset($_GET["error"])){
        if ($_GET["error"]==1){
            echo "<p class='alert-danger'>La contraseña no coincide</p>";
        }
    }
    ?>
    <br>
    <a href="index.php">Volver a pagina inicial</a>
</div>
</body>
</html>