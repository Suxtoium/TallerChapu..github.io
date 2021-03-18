<?php
try{
        include "global/conexion.php";
                
                $conexion=mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASENAME) or die ("Error de conexion");
                
                $Nombre = $_POST['Nombre'];
                $Apellido_1 = $_POST['Apellido_1'];
                $Apellido_2 = $_POST['Apellido_2'];
                $Telefono = $_POST['Telefono'];
                $Usuario = $_POST['Usuario'];
                $Constraseña = $_POST['Contraseña'];
                $Tipo = 'Usuario';
                $insertar="INSERT INTO clientes VALUES ('$Nombre','$Apellido_1','$Apellido_2','$Telefono','$Usuario','$Constraseña','$Tipo')";

                $resultado=mysqli_query($conexion,$insertar) or die ("Error ");
                mysqli_close($conexion);
                echo '<script language="javascript">alert("Datos Guardados");window.location.href="inicioSesion.php"</script>';
                
}catch(Exception $E){
        echo 'Excepción capturada: ',  $E->getMessage(), "\n";
}
?>
