<?php

include "../clases/conexion.php";
include "../clases/profesor.php";

$objconexion = new conexion();
$objprofesor = new profesor();

$objconexion = $objconexion->conectar();
 echo $objprofesor->editar($objconexion,$_POST['id_profesor'], $_POST['nombre'], $_POST['apellido'],
$_POST['edad'], $_POST['fechanacimiento'], $_POST['documento'], $_POST['titulou']);

echo "<a href='../consultar.php'>ver registro</a>";

