<?php
session_start();
if (isset($_GET["votacion"]) && isset($_GET["idmens"])){
    $voto=$_GET["votacion"];
    $idmens=$_GET["idmens"];
    $idUsu=$_SESSION["usuario"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("INSERT INTO votaciones VALUES ('$idUsu','$idmens','$voto')");
    header("location:detalles.php?idmens=$idmens");
}
?>