<?php
if (isset($_GET["mensaje"]) && isset($_GET["modificar"])){
    $mensaje=$_GET["mensaje"];
    $modificar=$_GET["modificar"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $result = $mysql->query("UPDATE mensajes SET mensaje='".$mensaje."' WHERE id_mensaje='".$modificar."'");
    header('location:pagina.php');
}
?>