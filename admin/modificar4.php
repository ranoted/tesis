<?php
include ('conexion.php');
// Recepción de los datos enviados mediante POST   


$nombre_clie = $_POST["nombre_clie"];
$tel_clie = $_POST["tel_clie"];
$correo_clie = $_POST["correo_clie"];
$direc_clie = $_POST["direc_clie"];
$id_clie=$_POST["id_clie"];


//actualizar los datos


$actualizar= "UPDATE `cliente` SET nombre_clie='$nombre_clie', tel_clie='$tel_clie', correo_clie='$correo_clie', direc_clie='$direc_clie' WHERE id_clie='$id_clie'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo" <script> window.history.go(-1); </script>";
}


                                                    