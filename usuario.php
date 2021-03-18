<?php

//Incluciones 
include "global/conexion.php";

// condicional de recibo de POST del btnAccion
error_reporting(0);
if ($_POST["btnAccion"]) {

    // datos de variables recibidas por POST
    $Email = $_POST['txtEmail'];
    $Pass = $_POST['txtPass'];
    $Name = $_POST['txtNombre'];
    $Ap1 = $_POST['txtAp1'];
    $Ap2 = $_POST['txtAp2'];
    $Tel = $_POST['txtTel'];
    $Tipo = "Usuario";
    $accion=(isset($_POST['accion']))?$_POST['accion']:"";
    $accionAlert="hidden";
    $mostrarModal=false;


    // condicional para las diversas acciones del boton
    switch ($_POST["btnAccion"]) {
        case 'btnAgregar':
            error_reporting(0);

            // insercion de datos en la tabla clientes
            echo "Agregar";
            $consulta = $pdo->prepare("INSERT INTO clientes(Nombre,Apellido_1,Apellido_2,Telefono,Usuario,Contraseña,Tipo) 
                VALUES ('$Name','$Ap1','$Ap2','$Tel','$Email','$Pass','$Tipo');");
            $consulta->execute();
            $accionAlert="";
            break;
        case 'btnModificar':

            //modificacion de datos de la tabla clientes
            echo "Modificar";
            $consulta = $pdo->prepare("UPDATE clientes SET (Nombre=$Name,
            Apellido_1=$Ap1,
            Apellido_2=$Ap2,
            Telefono=$Tel,
            Usuario=$Email,
            Contraseña=$Pass,
            Tipo=$Tipo) where Usuario=$Email and Contraseña=$Pass");
            $consulta->execute();
            header("Location:Crud-Usuario.php");
            break;
        case 'btnEliminar':
            //elimnacion de datos de la tabla clientes
            echo "Eliminar";
            $consulta = $pdo->prepare("DELETE FROM clientes WHERE Usuario=$Email");
            $consulta->execute();
            header("Location:Crud-Usuario.php");
            break;
        case 'btnBuscar':
            //busqueda de datos en la tabla clientes
            echo "Buscar";
            $consulta = $pdo->prepare("SELECT * FROM clientes WHERE Usuario=$Email");
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            print_r($resultado);
            header("Location:Crud-Usuario.php");
            break;
            case 'btnCancelar':
                header("Location: Crud-Usuario.php");
                break;
            case 'Seleccionar':
                echo"Seleccionar";
               $mostrarModal=true;
                break;
    }
}

//cargar datos de usuario en variable
$consulta = $pdo->prepare("SELECT * FROM clientes;");
$consulta->execute();
$listaUsuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);
?>