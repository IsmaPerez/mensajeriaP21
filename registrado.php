<?php
if (isset($_POST["nombre"]) && isset($_POST["apellido1"]) && isset($_POST["apellido2"]) && isset($_POST["login"]) && isset($_POST["pass"]) && isset($_POST["passc"])){
    $nombre=$_POST["nombre"];
    $apellido1=$_POST["apellido1"];
    $apellido2=$_POST["apellido2"];
    $login=$_POST["login"];
    $pass=$_POST["pass"];
    $passc=$_POST["passc"];
    if ($mysql= new mysqli("localhost","user","user","mensajeria")) {
        if ($pass == $passc) {
            $mysql->query("INSERT INTO usuarios VALUES (NULL,'$nombre','$apellido1','$apellido2','$login','$pass')");
            header('location:iniciar.php');
        } else {
            $error = 1;
            header('location:registrar.php?error=1');
        }
    }else{
       $error=2;
       header('registrar..php?error=2');
    }
}
else{
    $error=2;
}
?>