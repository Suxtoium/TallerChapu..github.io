
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="shortcut icon" href="/img/icono.png" type="image/x-icon">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/registrar.css">

</head>

<body>

  </head>

  <body class="text-center">

    <main class="form-signin">
      <div class="container bg-secondary">
        <form form action="registro.php" method="POST">
          <h1 class="h3 mb-3 fw-normal">Registro</h1>
          
          <!--Contenedor de elementos registro-->
          <div class="container-login">
            <form>

              <!--Input Nombre-->
              <label for="" class="visually-hidden">Nombre</label>
              <input type="Name" id="Nombre" class="form-control" placeholder="Nombre" name="Nombre" required autofocus>
            
              <!--Input Apellido 1-->
              <label for="" class="visually-hidden">Apellido</label>
              <input type="First name" id="Primer Apellido" class="form-control" placeholder="Primer Apellido"
                name="Apellido_1" required autofocus>

              <!--Input Apellido 2-->
              <label for="" class="visually-hidden">Apellido</label>
              <input type="second Name" id="Segundo Apellido" class="form-control" placeholder="Segundo Apellido" c
                name="Apellido_2" required autofocus>

              <!-- Input Telefono -->
              <label for="" class="visually-hidden">Telefono</label>
              <input type="phone" id="Telefono" class="form-control" placeholder="Telefono" name="Telefono" required
                autofocus>

              <!-- Input email -->
              <label for="inputEmail" class="visually-hidden">Usuario</label>
              <input type="email" id="Correo" class="form-control" placeholder="Correo" name="Usuario" required
                autofocus>

              <!-- Input contraseña -->
              <label for="inputPassword" class="visually-hidden">Contrasena</label>
              <input  minlength="8" type="password" id="inputPassword" class="form-control py-2" placeholder="Contraseña"
                name="Contraseña" required>

              <!-- Buton de registro -->
              <button class="btn btn-lg btn-primary" type="submit">Registrarse</button>

            </form>
          </div>
      </div>
      </form>

  </body>

</html>