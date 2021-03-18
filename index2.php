<?php
include "global/sesiones.php";
include 'templates/header.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Automotrices Chapu</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid bg-secondary">
        <div class="container text-end ">
            <div class="row">
                <div class="col-12">
                    <a href="user_profile.php" class="btn btn-primary">
                    Ver Perfil : <?php echo $_SESSION['LOGIN']['Nombre'], " ", $_SESSION['LOGIN']['Apellido_1'], " ", $_SESSION['LOGIN']['Apellido_2'] ?></a>
                </div>
            </div>
        </div>
    </div>

    <?php include 'templates/content.php'; ?>

    <?php include 'templates/footer.php'; ?>

</body>

</html>