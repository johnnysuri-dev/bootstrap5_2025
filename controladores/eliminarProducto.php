<?php
include('../modelos/conexion.php');

$id=$_REQUEST['ide'];

$query="DELETE FROM `producto` WHERE Id_Producto='$id'";

$res=$conexion->query($query);
if($res){
// redireccionando la vista.
     header("location:../vistas/listaProducto.php");
}else{

    echo"No se pudo eliminar";
}

?>