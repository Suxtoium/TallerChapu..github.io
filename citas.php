<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/citas.css">

</head>

<body>
              <?php 
                      error_reporting(0);
                       session_start();
                      $nombre = $_SESSION["Nombre"];        
                      $Apellido = $_SESSION["Apellido"];  
                      $Telefono = $_SESSION["Telefono"];  
                      $Usuario = $_SESSION["Usuario"];           
                ?>
              
  <!--titulo-->
    <div class="container-fluid bg-dark text-white py-4">
        <div class="container text-center">
            <p>Citas Para Revicion</p>
        </div>
    </div>
     <!--buscar cliente-->
    <div class="container-fluid align-items-center">
        <div class="container bg-secondary py-5 text-center">
            <div>
                <h1 class="h3 mb-3 fw-normal">Buscar Cliente</h1>
                <main class="form-signin">
                    <form action="/consultaClientes.php"  
                     method="POST">
                        <label for="" class="visually-hidden">Usuario</label>
                        <input type="email" id="Usuario" class="form-control" placeholder="Usuario" name="Usuario" required autofocus>
                        <button  class="btn btn-lg btn-primary btn-block" type="submit">Buscar</button>   
                    </form>
                    </main>
            </div>
            <!--registrae las citas-->
            <main class="form-signin">
            <div class="container py-5 text-white">
                <div class="row">
                    <form form action="/registarCitas.php" method="POST">
                        <h1 class="h3 mb-3 fw-normal">Citas</h1>
                        <!---->
                        <div class="container-login">
                          <form>
                            <!---->
                            <label for="" class="visually-hidden">Nombre</label>
                            <input type="Name" id="Nombre" class="form-control" placeholder="Nombre" name="Nombre" value=" <?php echo $nombre ?>" required autofocus>
                            <!---->
                            <label for="" class="visually-hidden">Apellidos</label>
                            <input type="First name" id="Primer Apellido" class="form-control" placeholder="Apellidos" name="Apellidos" value=" <?php echo $Apellido ?>" required autofocus>
                            <!-- Telefono -->
                            <label for="" class="visually-hidden">Telefono</label>
                            <input type="phone" id="Telefono" class="form-control" placeholder="Telefono" name="Telefono" value=" <?php echo $Telefono ?>" required
                              autofocus>
                            <!-- email -->
                            <label for="inputEmail" class="visually-hidden">Usuario</label>
                            <input type="email" id="Correo" class="form-control" placeholder="Correo" name="Correo" value=" <?php echo $Usuario ?>" required
                              autofocus>
                            <!-- contraseña -->
                            
                            <textarea type='text'class="form-control py-2" placeholder="Descricion" name="Descripcion" rows="10" cols="40">descripción de arreglo</textarea>
                              <!-- Fecha -->
                            <label for="descripcion" class="visually-hidden">Fecha</label>
                            <input type="date" id="Facha" class="form-control py-2" placeholder="Fecha" name="Fecha"  required autofocus>
                            <button  class="btn btn-lg btn-primary btn-block" type="submit">Registrar</button>                 
                          </form>
                    </main>
                </div>
            </div>

        </div>
    </div>
</body>

</html>

<!-- --!