<?php
include ('conexion.php');
// Recepción de los datos enviados mediante POST   


$usuario = $_POST["usuario"];
$password = $_POST["password"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$id_c = $_POST["id_c"];



 $insertar = "INSERT INTO `usuarios` (usuario,password,nombre,correo,id_c) VALUES ('$usuario','$password','$nombre', '$correo','$id_c')";
 $query = mysqli_query($conexion,$insertar);
 if($query){
   echo" <script> window.history.go(-1); </script>";
}

        