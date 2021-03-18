
<?php
               include "global/conexion.php";

               $conexion=mysqli_connect($SERVER,$USER,$PASSWORD,$DATABASENAME) or die ("Error de conexion");
                
                $Nombre = $_POST['Nombre'];
                $Apellido = $_POST['Apellidos'];
                $Telefono = $_POST['Telefono'];
                $Correo = $_POST['Correo'];
                $Descripcion = $_POST['Descripcion'];
                $Fecha = $_POST['Fecha'];



                $insertar="INSERT INTO citas_1 VALUES('$Nombre', '$Apellido', '$Telefono', '$Correo', '$Descripcion', '$Fecha')";

               
                $resultado=mysqli_query($conexion,$insertar) or die ("Error");
                echo '<script language="javascript">alert("Datos Guardados");window.location.href="/citas.php"</script>';

                mysqli_close($conexion);
        ?>

        

        

