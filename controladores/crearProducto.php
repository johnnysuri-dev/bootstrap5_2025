<?php
include('../modelos/conexion.php');

$nom= $_POST['nombre'];
$des= $_POST['descripcion'];
$fe= $_POST['fecha'];
$can= $_POST['cantidad'];
$cos= $_POST['costo'];
$cod= $_POST['codigo'];
$cat= $_POST['categoria'];

$query="INSERT INTO `producto`(`Nombre`, `Descripción`, `Fecha_Registro`, `Cantidad`, `Costo_Unitario`, `Codigo_Barra`,`id_Categoria`) 
VALUES ('$nom','$des','$fe','$can','$cos','$cod','$cat')";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaProducto.php");
}else{

    echo"no se guardo";
}

?>