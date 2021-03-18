<div id="carousel_container">

    <!-- CONTENEDOR DEL CAROUSEL -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="carousel-img" src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img id="carousel-img" src="img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img id="carousel-img" src="img/3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
        </a>
    </div>
</div>
<!-- FIN CAROUSEL -->

<!-- CONTENEDOR DEL  JUMBOTRON  -->
<div class="jumbotron text-black">
    <div class="jumbotron-container">
      <h1 class="text-center text-white">Acerca de Nosotros</h1>
        <p>
            Somos una empresa dedicada a la reparacion de equipos mecanicos ubicados en la zona de Cariari de Guapiles.</p>
        <p>
            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Leer mas &raquo;
            </a>
        </p>
    </div>
</div>
<div class="collapse" id="collapseExample">
    <div class="card card-body bg-secondary">
        Nuestra principal actividad es la reparación y mantenimiento de todo tipo de vehículos y arreglo, ademas contamos con la venta de repuestos de la mejor calidad.
    </div>
</div>

<!-- FIN JUMBOTRON  -->

<!--CONTENEDOR DE DATOS DE EMPRESA-->

<div class="container-fluid">
    <div class="row">
        <div class="col text-center py-2 text-white">
            <h1>¿ Por que elegirnos ?</h1>
        </div>
    </div>
    <div class="row">
        <section class="cards-wrapper">
            <div class="card-grid-space">
                <a class="card" href="" style="--bg-img: url()">
                    <div class="card-body">
                        <img src="/img/mecanico.png" class="card-img-top" alt="Expertos.jpeg" height="210px">
                        <h3 class="card-title">Técnicos Expertos</h3>
                        <p class="card-text">Nuestro personal es altamente capacitado, contamos con equipos y herramientas de última tecnología en el sector automotriz.</p>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a class="card" href="" style="--bg-img: url()">
                    <div class="card-body">
                        <img src="/img/calidad.png" class="card-img-top" alt="Calidad.jpeg" height="210px">
                        <h3 class="card-title">Alta Calidad</h3>
                        <p class="card-text">Queremos que sientan que Servicios Automotrices Chapu es el taller mecánico ideal para su coche. Porque para nosotros tu eres importante.</p>
                    </div>
                </a>
            </div>
            <div class="card-grid-space">
                <a class="card" href="" style="--bg-img: url()">
                    <div class="card-body">
                        <img src="/img/bajo-costo.png" class="card-img-top" alt="Precio.jpeg" height="210px">
                        <h3 class="card-title">Bajo Costo</h3>
                        <p class="card-text">Nos ajustamos a todos los presupuestos, contamos con los buenos precios, calidad y garantía del mercado.</p>
                    </div>
                </a>
            </div>
        </section>
    </div>
</div>

<!-- FIN DATOS EMPRESA  -->

<!-- CONTENEDOR DE HORARIO -->
<section>
    <h1 class="text-center text-white">Horarios de Atención</h1>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th class="text-center">Lunes</th>
                    <th class="text-center">Martes</th>
                    <th class="text-center">Miercoles</th>
                    <th class="text-center">Jueves</th>
                    <th class="text-center">Viernes</th>
                    <th class="text-center">Sábado</th>
                    <th class="text-center">Domingo</th>
                </tr>
                <tr>
                    <th class="text-center">8:00 am - 8:00 pm</th>
                    <th class="text-center">8:00 am - 8:00 pm</th>
                    <th class="text-center">8:00 am - 8:00 pm</th>
                    <th class="text-center">8:00 am - 8:00 pm</th>
                    <th class="text-center">8:00 am - 8:00 pm</th>
                    <th class="text-center">8:00 am - 8:00 pm</th>
                    <th class="text-center">No brindamos servicios</th>
                </tr>
            </thead>
        </table>
    </div>
</section>
<!-- FIN HORARIO -->
