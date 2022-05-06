<?php
include ('conexion.php');
// Recepción de los datos enviados mediante POST   


$precio_mate = $_POST["precio_mate"];
$descri_mate = $_POST["descri_mate"];
$nombre_mate = $_POST["nombre_mate"];
$imag = $_POST["imag"];
$id_mate=$_POST["id_mate"];


//actualizar los datos


$actualizar= "UPDATE `materiales` SET nombre_mate='$nombre_mate', descri_mate='$descri_mate', imag='$imag', precio_mate='$precio_mate' WHERE id_mate='$id_mate'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo" <script> window.history.go(-1); </script>";
}

