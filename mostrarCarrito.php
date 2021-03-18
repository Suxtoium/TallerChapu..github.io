<?php
include 'carrito.php';
include 'templates/header.php';
?>
<link rel="stylesheet" href="/css/table.css">
<br>

<div class="container">
    <?php if (!empty($_SESSION['CARRITO'])) { ?>
        <section>
    <h1 class="text-center text-white">Lista del Carrito</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <td width="35%">Descripción</td>
                    <td class="text-center" width="10%">Cantidad</td>
                    <td class="text-center" width="10%">Precio</td>
                    <td class="text-center" width="20%">Total</td>
                    <td class="text-center" width="10%">--</td>
                </tr>
                <?php
                $total = 0;
                foreach ($_SESSION['CARRITO'] as $indice => $producto) {
                ?>
                    <tr>
                        <th width="35%"><?php echo $producto['NOMBRE']; ?></th>
                        <th class="text-center" width="10%"><?php echo $producto['CANTIDAD']; ?></th>
                        <th class="text-center" width="10%"><?php echo $producto['PRECIO']; ?></th>
                        <th class="text-center" width="20%"><?php echo number_format($producto['PRECIO'] * $producto['CANTIDAD'], 2); ?></th>
                        <th class="text-center" width="10%">
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'], COD, KEY); ?>">
                                <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">
                                    Eliminar
                                </button>
                        </th>
                        </form>

                    </tr>
                    <?php $total = $total + ($producto['PRECIO'] * $producto['CANTIDAD']); ?>

                <?php  } ?>
                
                <tr>
                    <td colspan="3" align="right">
                        <h3>Total</h3>
                    </td>
                    <td align="right">
                        <h3><?php echo number_format($total, 2); ?></h3>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="5">
                        <form action="pagar.php" method="post">
                            <div class="alert alert-success align-content-center" role="alert">

                                <div class="form-group">
                                    <label for="my-input">Correo de contacto</label>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Ingrese su dirección de correo" required>
                                </div>
                            </div>
                            
                            <button class="btn btn-primary btn-lg" type="submit" value="pagar" name="btnAccion">
                            <img src="/img/paypal.svg" height="25px" width="25px" alt="Paypal.jpg">
                            Pagar por Paypal
                            </button>
                        </form>
                    </td>
                </tr>   
            </thead>
        </table>
    </div>
</section>
    <?php } else {
    ?>
        <div class="alert alert-success" role="alert">
            No hay productos en el carrito.
        </div>

    <?php } ?>
    <div class="alert alert-primary text-center">
        <?php echo $mensaje ?>
        <a href="productos.php" class="badge badge-primary text-dark">Agregar productos</a>
    </div>
</div>

<!-- CONTENEDOR DE LA TABLA -->

<!-- Fin table -->
<?php include 'templates/footer.php'; ?>