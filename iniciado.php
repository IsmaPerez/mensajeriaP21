<?php
if (isset($_POST["login"]) && isset($_POST["pass"])){
    $login=$_POST["login"];
    $pass=$_POST["pass"];
    $mysql= new mysqli("localhost","user","user","mensajeria");
    $result=$mysql->query("SELECT * FROM usuarios");
    $fila=$result->fetch_assoc();
    while($fila){
        if ($login==$fila["login"] && $pass==$fila["password"]){
                session_start();
                $_SESSION["iniciado"]=1;
                $_SESSION["usuario"]=$fila["id"];
                header('location:pagina.php?');
        }
        else{
            echo "<p>Usuario incorrecto</p>";
        }
        $fila=$result->fetch_assoc();
    }
    if ($_SESSION["iniciado"]!=1){
        header('location:iniciar.php');
    }
}
else{
    $error=2;
}
?>