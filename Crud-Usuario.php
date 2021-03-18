<?php

//Inclucion de elementos php
include "usuario.php";
include 'templates/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META DATOS Y HOJAS DE ESTILO-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/table.css">
</head>

<body>

    <br>

    <!-- Contedor de CRUD -->
    <div class="container-fluid">
        <div class="container">
            <form class="text-white" action="usuario.php" method="post">

                <!-- Modal -->
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
                                        <label class="text-dark" for="">Correo ( Usuario ):</label>
                                        <input class="form-control " type="email" <?php echo ($usuario['Usuario']); ?> name="txtEmail" maxlength="20" placeholder="Ingrese correo" autofocus>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="text-dark" for="">Contraseña:</label>
                                        <input class="form-control py-2" maxlength="20" type="password" name="txtPass" placeholder="Ingrese Contraseña" autofocus>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-sm-12">
                                        <label class="text-dark" for="">Nombre:</label>
                                        <input class="form-control" type="text" name="txtNombre" id="txtNombre" maxlength="20" placeholder="Ingrese Nombre" autofocus>

                                    </div>
                                    <div class="form-group  col-md-4 col-sm-12">
                                        <label class="text-dark" for="">Apellido Paterno:</label>
                                        <input class="form-control" type="text" name="txtAp1" maxlength="20" placeholder="Ingrese Apellido Paterno" autofocus>

                                    </div>
                                    <div class="form-group col-md-4 col-sm-12">
                                        <label class="text-dark" for="">Apellido Materno:</label>
                                        <input class="form-control" type="text" name="txtAp2" maxlength="20" placeholder="Ingrese Apellido Materno" autofocus>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <label class="text-dark" class="text-white" for="">Numero Telefono:</label>
                                        <input class="form-control" type="number" name="txtTel" placeholder="Ingrese Numero de Telefono" autofocus>

                                    </div>
                                </div>
                                <div class="form-row">

                                    <p class="text-white">Tipo de Usuario:</p>
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                                    <label class="text-dark" class="form-check-label" for="exampleRadios2">
                                        Usuario
                                    </label>
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="text-dark" class="form-check-label" for="exampleRadios1">
                                        Administrador
                                    </label>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="alert alert-success" role="alert" <?php echo $accionAlert ?>>
                                        Agregado Exitosamente
                                    </div>
                                </div>

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

                <div class="container">
                    <form action="usuario.php" method="post">
                        <input class="form-control text-center" type="email" name="txtEm" maxlength="20" placeholder="Ingrese el nombre de usuario" required>
                        <button class="btn btn-primary w-100" type="button">Buscar</button>
                    </form>
                </div>
                <section>
                    <h1 class="text-center text-white">Lista de usuarios</h1>
                    <div class="tbl-header">
                        <table class="table-bordered" cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <th class="text-center" width="10%">Nombre</th>
                                    <th class="text-center" width="10%">Apellido Paterno</th>
                                    <th class="text-center" width="10%">Apellido Materno</th>
                                    <th class="text-center" width="18%">Correo</th>
                                    <th class="text-center" width="10%">Contraseña</th>
                                    <th class="text-center"width="10%">Telefono</th>
                                    <th class="text-center" width="10%">Privilegios</th>
                                    <th colspan="2" class="text-center">Acciones</th>
                                </tr>
                                <?php

                                foreach ($listaUsuarios as $usuario) {
                                ?>
                                    <tr>
                                        <td class="text-center"><?php echo ($usuario['Nombre']); ?></td>
                                        <td class="text-center"><?php echo ($usuario['Apellido_1']); ?></td>
                                        <td class="text-center"><?php echo ($usuario['Apellido_2']); ?></td>
                                        <td class="text-center"><?php echo ($usuario['Usuario']); ?></td>
                                        <td class="text-center"><?php echo ($usuario['Contraseña']); ?></td>
                                        <td class="text-center"><?php echo ($usuario['Telefono']); ?></td>
                                        <td class="text-center"><?php echo ($usuario['Tipo']); ?></td>

                                        <td>

                                            <form action="" method="post">
                                                <input type="hidden" name="txtNombre" value="<?php echo ($usuario['Nombre']); ?>">
                                                <input type="hidden" name="txtAp1" value="<?php echo ($usuario['Apellido_1']); ?>">
                                                <input type="hidden" name="txtAp2" value="<?php echo ($usuario['Apellido_2']); ?>">
                                                <input type="hidden" name="txtEmail" value="<?php echo ($usuario['Usuario']); ?><">
                                                <input type="hidden" name="txtPass" value="<?php echo ($usuario['Contraseña']); ?>">
                                                <input type="hidden" name="txtTel" value="<?php echo ($usuario['Telefono']); ?>">
                                                <input type="hidden" name="txtTel" value="<?php echo ($usuario['Tipo']); ?>">
                                                <button  class="btn btn-primary py-2" type="button" name="btnAccion" type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Seleccionar
                                                </button>
                                            </form>
                                            <td>
                                            <input class="btn btn-danger py-2" type="submit" value="Eliminar" name="btnAccion" value="btnEliminar">
                                        </td>
                                        </td>

                                    </tr>
                                <?php  } ?>
                            </thead>
                        </table>
                    </div>
                </section>
            </form>
            <!-- FIN BOTONES -->

            <!-- CONTENEDOR DE LA TABLA -->

            <!-- Fin table -->
        </div>
    </div>

    <!-- FIN CRUD -->
    <?php if ($mostrarModal) { ?>
        <script>
            $('#exampleModal').modal('show');
        </script>
    <?php } ?>
    <?php include 'templates/footer.php'; ?>
</body>

</html>