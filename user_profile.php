<?php
include "global/sesiones.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>

<body>

    <?php include 'templates/header.php'; ?>

    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p>Nombre del usuario</p>
        </div>
    </div>
    <div class="container-fluid align-items-center">
        <div class="container bg-secondary py-5 text-center">
            <p>Detalles de usuario</p>
            <div class="container py-5 text-white">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div class="row py-2">
                            <div class="col-sm-12 col-md-4">
                                <p>Nombre</p>
                                <p><?php echo $_SESSION['LOGIN']['Nombre'] ?></p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <p>Apellido Paterno</p>
                                <p><?php echo $_SESSION['LOGIN']['Apellido_1'] ?></p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <p>Apellido Materno</p>
                                <p><?php echo $_SESSION['LOGIN']['Apellido_2'] ?></p>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-md-2">

                            </div>
                            <div class="col-sm-12 col-md-4">
                                <p>Usuario</p>
                                <p><?php echo $_SESSION['LOGIN']['Usuario'] ?></p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <p>Contraseña</p>
                                <p><?php echo $_SESSION['LOGIN']['Contraseña'] ?></p>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-md-2">

                            </div>
                            <div class="col-sm-12 col-md-4">
                                <p>Email</p>
                                <p><?php echo $_SESSION['LOGIN']['Usuario'] ?></p>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <p>Numero de Telefono</p>
                                <p><?php echo $_SESSION['LOGIN']['Telefono'] ?></p>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-sm-12 col-md-12">
                                <button class="btn btn-primary py-2" type="button" name="btnAccion" type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Datos de usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="text-dark" for=""> Nombre:</label>
                            <input class="form-control " type="email" value="<?php echo $_SESSION['LOGIN']['Nombre'] ?>" name="txtEmail" maxlength="20" placeholder="Ingrese correo" autofocus>
                        </div>
                        <div class="form-group  col-md-6 col-sm-12">
                            <label class="text-dark" for="">Apellido Paterno:</label>
                            <input class="form-control" type="text" name="txtAp1" value="<?php echo $_SESSION['LOGIN']['Apellido_1'] ?>" maxlength="20" placeholder="Ingrese Apellido Paterno" autofocus>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="text-dark" for="">Apellido Materno:</label>
                            <input class="form-control" type="text" name="txtAp2" value="<?php echo $_SESSION['LOGIN']['Apellido_2'] ?>" maxlength="20" placeholder="Ingrese Apellido Materno" autofocus>
                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label class="text-dark" for="">Contraseña:</label>
                            <input class="form-control py-2" maxlength="20" value="<p><?php echo $_SESSION['LOGIN']['Contraseña'] ?></p>" type="password" name="txtPass" placeholder="Ingrese Contraseña" autofocus>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-12 col-sm-12">
                            <label class="text-dark" for="">Email:</label>
                            <input class="form-control" type="text" name="txtNombre" value="<?php echo $_SESSION['LOGIN']['Usuario'] ?>" id="txtNombre" maxlength="20" placeholder="Ingrese Nombre" autofocus>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <label class="text-dark" class="text-white" for="">Numero Telefono:</label>
                            <input class="form-control" type="number" name="txtTel" value="<?php echo $_SESSION['LOGIN']['Telefono'] ?>" placeholder="Ingrese Numero de Telefono" autofocus>

                        </div>
                    </div>

                    <br>
                    <!-- <div class="form-row">
                                    <div class="alert alert-success" role="alert" <?php echo $accionAlert ?>>
                                        Agregado Exitosamente
                                    </div>
                                </div> -->

                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" type="submit" name="btnAccion" value="btnAgregar">Agregar</button>

                    <button class="btn btn-danger" type="submit" name="btnAccion" value="btnEliminar">Eliminar</button>

                    <button class="btn btn-warning" type="submit" name="btnAccion" value="btnModificar">Modificar</button>

                    <button class="btn btn-primary" type="submit" name="btnAccion" value="btnCancelar">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</body>

</html>