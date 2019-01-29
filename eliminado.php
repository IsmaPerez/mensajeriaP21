<?php
if (isset($_GET["idmens"])){
    $idmens=$_GET["idmens"];
    $mysql = new mysqli("localhost", "user", "user", "mensajeria");
    $mysql->query("DELETE FROM mensajes WHERE id_mensaje=$idmens");
    header('location:pagina.php');
}
?>