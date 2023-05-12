<?php
include("conexion.php");
$sql= "INSERT INTO usuarios (nombre, apellido, edad) values ('migue', 'juan', '21')";

$res= $conexion->query($sql);

if($res){
    echo "Insercción exitosa";
}else{
    echo "falló la inserción";
}




?>