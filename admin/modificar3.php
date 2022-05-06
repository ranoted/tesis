<?php
include ('conexion.php');
// Recepción de los datos enviados mediante POST   


$tipmes = $_POST["tipmes"];
$mex = $_POST["mex"];
$mey = $_POST["mey"];
$valorf = $_POST["valorf"];
$id_coti=$_POST["id_coti"];


//actualizar los datos


$actualizar= "UPDATE `cotizacion` SET tipmes='$tipmes', mex='$mex', mey='$mey', valorf='$valorf' WHERE id_coti='$id_coti'";

$resultado=mysqli_query($conexion,$actualizar);

if($resultado){
    echo" <script> window.history.go(-1); </script>";
}



