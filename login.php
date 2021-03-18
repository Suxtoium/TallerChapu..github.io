<?php

if (isset($_POST["btnLogin"])) {
    include("global/conexion.php");

    $txtEmail = $_POST['txtEmail'];
    $txtPassword = $_POST['txtPassword'];

    $sentencia = $pdo->prepare("Select * FROM clientes WHERE Usuario=:user AND Contraseña=:pass");

    $sentencia->bindParam("user", $txtEmail, PDO::PARAM_STR);
    $sentencia->bindParam("pass", $txtPassword, PDO::PARAM_STR);
    $sentencia->execute();
    $reg = $sentencia->fetch(PDO::FETCH_ASSOC);
    $numeroRegistros = $sentencia->rowCount();

    if ($numeroRegistros >= 1) {
        session_start();
        $_SESSION['LOGIN'] = $reg;
        header("Location:index2.php");
    } else {
        header("Location:inicioSesion2.php"); 
    }
}
?>