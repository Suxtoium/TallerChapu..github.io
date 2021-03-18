<?php
include "global/conexion.php";

$conexion=mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASENAME) or die ("Error de conexion");
$Usuario=$_POST['Correo'];
$consulta=mysqli_query($conexion,"SELECT *from citas_1 where Correo = '$Usuario'") or die ("Error al mostrar los datos");



if($extraido=mysqli_fetch_array($consulta)){
    session_start();
    $_SESSION['Nombre'] = $extraido['Nombre'];
    $_SESSION['Apellidos'] = $extraido['Apellidos'];
    $_SESSION['Telefono'] = $extraido['Telefono'];
    $_SESSION['Correo'] = $extraido['Correo'];
    $_SESSION['Descripcion'] = $extraido['Descripcion'];
    $_SESSION['Fecha'] = $extraido['Fecha'];
    if (!isset($_SESSION['LOGIN'])) {
           header("location: inicioSesion.php");
    }elseif($_SESSION['LOGIN']["Tipo"] == "Administrador"){
            header("location: consultaCita_2.php");
        }elseif($_SESSION['LOGIN']["Tipo"] == "Usuario"){
            header("location: consultaCita.php");
    }

}else{

    if (!isset($_SESSION['LOGIN'])) {
        echo '<script language="javascript">alert("El nombre que Introdujo no se encuenta registrado");window.location.href="consultaCita_2.php"</script>';

    }else{
        if ($_SESSION['LOGIN']["Tipo"] == "Administrador"){
            echo '<script language="javascript">alert("El nombre que Introdujo no se encuenta registrado");window.location.href="consultaCita_2.php"</script>';

        }
    }    
}
mysqli_close($conexion);
echo'<table>'; 
?>