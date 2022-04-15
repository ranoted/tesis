<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    
    <title>Topes de mesa</title>
</head>
<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="./index.html" class="navbar-brand">Tope de mesa</a>
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


    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option selected>Open this select menu</option>
        <option value="1">Granito</option>
        <option value="2">Flex</option>
        
      </select>
      
      <select class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected>Open this select menu</option>
        <option value="1">Blanco</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

    <!-- Codigo para boton cambio de color
        <label for="exampleColorInput" class="form-label">Color picker</label>
        <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">

    -->

    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
</body>
</html>