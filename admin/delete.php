<?php
include ('conexion.php');
// Recepción de los datos enviados mediante POST   



$id=$_GET["id"];


//actualizar los datos


$eliminar= "DELETE FROM `usuarios` WHERE id='$id'";

$resultado=mysqli_query($conexion,$eliminar);

if($resultado){
    echo" <script> window.history.go(-1); </script>";
}