<?php

include "../clases/conexion.php";
include "../clases/profesor.php";

$objconexion = new conexion();
$objprofesor = new profesor();

$conexion = $objconexion->conectar();
 echo $objprofesor->registrar($conexion, $_POST['nombre'], $_POST['apellido'], 
$_POST['edad'], $_POST['fechanacimiento'], $_POST['documento'], $_POST['titulou']);