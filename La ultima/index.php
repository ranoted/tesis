<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <title></title>
    <meta charset="utf-8"><!--Ayuda al navegador a entender caracteres especiales ñ emogis etc-->
    <meta name="description" content="Esta pagina te mostrara topes de mesas"><!-- La descripcion que ve el usuario cuando busca la pagina-->
    <meta name="robots" content="index,follow"><!--Mejor posicionamiento para la pagina-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Hace que la pagina sea Responsive-->

    <!-- Bootstrap CSS -->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    
  

  <title>Topes de mesa</title>
  </head>
  <body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="./index.php" class="navbar-brand">Tope de mesa</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
                <div id="MenuNavegacion" class="collapse navbar-collapse">
                    <ul class="navbar-nav ms-3">
                        <li class="nav-item"><a class="nav-link" href="./Trabajo.php">Trabajos</a></li>
                        <li class="nav-item"><a class="nav-link" href="./Registrar.php">Login</a></li>         
                       
                        <li class="nav-item dropdown" >
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                Opciones de soporte                                   
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Manual</a></li>
                                <li><a class="dropdown-item" href="#">Manual</a></li>
                                <li><a class="dropdown-item" href="#">Manual</a></li>
                            </ul>
                        </li>          
                    </ul>
                </div>
        </nav>

    </div>

    </html><div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./IMG/Prueba.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Algo bonito a la vista</h5>
            <p>Elige la cocina de tu sueños</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./IMG/esta.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Materiales de alta calidad</h5>
            <p> Materiales que son de la competencia</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./IMG/prueba3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Medidas para ingenieros experimentados</h5>
            <p>Tu pones las mediciones y nosotros las entregamos al establecimiento </p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>



   

      <script src="./app.js"></script>

    
    
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
