<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topes de mesa</title>
    <!--boostrap-->
    <link href="./node_modules/bootstrap/dist/css/bootstrap.rtl.min.css" rel="stylesheet"> 
    <!--Llamando css para el Login-->
    <link href="./Registro.css" rel="stylesheet">
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

    <div class="login-box">
        
        <h1>Iniciar sesion</h1>

        <form   method="POST"   action="Registrar.php" >

            <!--Usuario-->
            <label for="username">Usuario</label>
            <input type="text" placeholder="Usuario" name="usuario">

            <!--Contraseña-->
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Contraseña" name="Contraseña">


            <input type="submit" value="Ingresar">

            <a href="#">Olvidaste tu Contraseña?</a>
            <br></br>
            <a href="#">Olvidaste tu nombre de usuario?</a>
        </form>

       
    </div>
    


    <!--
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      --->

      <!-- Llamando Scrip de boostrap-->
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./app.js"></script>
</body>
</html>