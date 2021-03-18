<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/registrar.css">
    <link rel="stylesheet" href="/css/tablaClientes.css">
</head>
<body>

                <?php 
                      error_reporting(0);
                       session_start();
                      $nombre = $_SESSION["Nombre"];        
                      $Apellidos = $_SESSION["Apellidos"];  
                      $Telefono = $_SESSION["Telefono"];  
                      $Correo = $_SESSION["Correo"];       
                      $Descripcion = $_SESSION["Descripcion"];  
                      $Fecha = $_SESSION["Fecha"];       
                ?>
    <div class="container-fluid align-items-center">
        <div class="container bg-secondary py-5 text-center">
            <div>
                <h1 class="h3 mb-3 fw-normal">Buscar citas</h1>
                <main class="form-signin">
                    <form action="/ConsultaBaseCitas.php"  method="POST">
                    
                        <label for="" class="visually-hidden">Nombre</label>
                        <input type="email" id="Correo" class="form-control" placeholder="Correo" name="Correo"    required autofocus>
                        <button  class="btn btn-lg btn-primary btn-block" type="submit">Buscar</button>   
                    </form>
                    
                    </main>

            <div> 
                    <main>
                    <form>
                    <table class="table table-light table-bordered">
                                <tbody>
                                    <tr>
                                        <td width="15%">Nombre</td>
                                        <td class="text-center" width="15%">Apellidos</td>
                                        <td class="text-center" width="15%">Correo</td>
                                        <td class="text-center" width="5%">Telefono</td>
                                        <td class="text-center" width="35%">Descripcion</td>
                                        <td class="text-center" width="15%">Fecha</td>
                                    </tr>
                                    <tr>
                                        <th width="15%"> <?php echo $nombre ?></th>
                                        <th class="text-center" width="15%"> <?php echo $Apellidos ?></th>
                                        <th class="text-center" width="15%"> <?php echo $Correo ?></th>
                                        <td class="text-center" width="5%"><?php echo $Telefono ?></td>
                                        <td class="text-center" width="35%"><?php echo $Descripcion ?></td>
                                        <td class="text-center" width="15%"><?php echo $Fecha ?></td>
                                    </tr>
                                </tbody>
                            </table>
                    </form>
                    
                    </main>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>

    
</body>
</html>