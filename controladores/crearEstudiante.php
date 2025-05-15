<?php
include('../modelos/conexion.php');

$nom= $_POST['nombre'];
$ap= $_POST['apellido'];
$ci= $_POST['ci'];
$ge= $_POST['genero'];
$cu= $_POST['curso'];

$query="INSERT INTO estudiante(Nombre, Apellido, CI, Genero, Curso) 
VALUES ('$nom','$ap','$ci','$ge','$cu')";

$res=$conexion->query($query);
if($res){

     echo "se inserto correctamentee";
}else{

    echo"no se guardo";
}

?>