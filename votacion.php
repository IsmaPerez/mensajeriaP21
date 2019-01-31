<?php
session_start();
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<h2>¿Con que valor calificarías este mensaje?</h2>
<form action="votar.php" method="get">
    <label for="votacion">Puntos:</label>
    <br>
    <select name="votacion" id="votacion">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input type="hidden" name="idmens" id="idmens" value="<?=$idmens?>">
    <br><br>
    <button>Votar</button>
</form>
</body>
</html>
<?php
}
else{
    header('location:pagina.php');
}
?>


