<?php

include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/card.css">
</head>

<body>
    <br>
    <div class="container">
        <br>
        <?php if ($mensaje != "") { ?>

            <div class="alert alert-success">
                <?php echo $mensaje ?>
                <a href="mostrarCarrito.php" class="badge badge-success text-dark">Ver carrito</a>
            </div>
        <?php
        }
        ?>
        <div class="row">

            <?php
            $sentencia = $pdo->prepare("SELECT * FROM productos");
            $sentencia->execute();
            $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>
            <?php foreach ($listaProductos as $producto) { ?>
                <div class="col-sm-12 col-md-4">
                    <!-- CARD -->
                    <section class="cards-wrapper">
                        <div class="card-grid-space">
                            <a class="card" href="" style="--bg-img: url(<?php echo $producto['Imagen']; ?>)">
                                <div>
                                    <h1><?php echo $producto['Nombre']; ?></h1>
                                    <p><?php echo $producto['Descripcion']; ?></p>
                                    <p> Precio: ₡<?php echo $producto['Precio']; ?></p>
                                </div>
                                <form action="" method="post">

                                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'], COD, KEY); ?>">
                                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">

                                    <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">
                                        Agregar al carrito
                                    </button>

                                </form>
                            </a>
                        </div>
                        </section>
                    <!-- FIN CARD -->
                </div>
            <?php } ?>




        </div>
    </div>


    <?php include 'templates/footer.php'; ?>

</body>

</html>