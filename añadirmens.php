<?php
if (isset($_GET["mensaje"])){
    session_start();
    if (isset($_SESSION["usuario"])) {
        $idUsu=$_SESSION["usuario"];
        $mensaje = $_GET["mensaje"];
        $mysql = new mysqli("localhost", "user", "user", "mensajeria");
        $result = $mysql->query("INSERT INTO mensajes VALUES (NULL,'".$mensaje."','".$idUsu."')");
        header('location:pagina.php');
    }
}
?>