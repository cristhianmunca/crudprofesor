<?php

include '../clases/conexion.php';
include '../clases/profesor.php';

$objconexion = new conexion;
$objprofesor = new profesor;

$conexion = $objconexion->conectar();
echo $objprofesor->eliminar($conexion, $_GET['id_profesor']);
