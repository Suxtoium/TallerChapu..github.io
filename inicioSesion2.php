<?php
// include 'global/sesiones.php';
//include 'templates/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="shortcut icon" href="/img/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>

<body>
<a class="btn btn-primary" href="index.php">Volver al Inicio</a>
    <div class="modal-dialog text-center">
        <div class=" col-sm-8 main-section">
            <div class="modal-content">
                <form class="form-login col-12" form action="/login.php" method="POST">
                    <div class="form-group" id="user-group">
                        <input id="Correo" type="email" class="form-control" placeholder="Correo" name="txtEmail" autofocus />
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input id="inputPassword" type="password" class="form-control" placeholder="Contraseña" name="txtPassword" />
                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-primary">Ingresar </button>
                    <div id="alerta" class="alert alert-danger" role="alert">
                        ¡Usuario o contraseña incorrectos!
                    </div>
                </form>
                <div class="col-12">
                    <a href="/registrar.php" class="text-white">No tienes una cuenta?</a>
                </div>
            </div>
        </div>
    </div>
</body>
</body>

</html>