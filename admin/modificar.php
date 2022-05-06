<?php
include ('conexion.php');
// Recepción de los datos enviados mediante POST   


$usuario = $_POST["usuario"];
$password = $_POST["password"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$id=$_POST["id"];


//actualizar los datos


$actualizar= "UPDATE `usuarios` SET usuario='$usuario', password='$password', nombre='$nombre', correo='$correo' WHERE id='$id'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo" <script> window.history.go(-1); </script>";
}