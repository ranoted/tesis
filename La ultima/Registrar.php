<?php

if(isset($_POST['usuario']) and ($_POST_['Contraseña'])){

$usuario = $_POST ['usuario'];
$Contraseña = $_POST ['Contraseña'];
session_start();
$_SESSION['usuarios']=$usuario;

include('db.php');

$consulta="SELECT*FROM usuarios where usuario='$usuario' and Contraseña='$Contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$fillas=mysqli_num_rows($resultado);

if($fillas){
    header("Location:Trabajo.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR  EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

}else{
    echo "No esta leyendo las variables";
}



//$BD_name = assert($_POST['BD_name']) ? $_POST['BD_name'] : '';
//$BD_password = assert($_POST['BD_password']) ? $_POST['BD_password'] : '';

//try{

    //$conexion = new PDO('mysql:host=localhost;port=3306;dbname=prueba_db', 'root','');
   // $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  //  echo json_decode('Conectado correctamente');


//} catch(PDOException $error){
   // echo $error->getMessage();
    //die();
//}
?>