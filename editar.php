<?php

include "clases/conexion.php";
include "clases/profesor.php";

$objconexion = new conexion();
$objprofesor = new profesor();

$conexion = $objconexion->conectar();
$datosprofesor = $objprofesor->consultarId($conexion, $_GET['id']);

$nombre;
$apellido;
$fechanacimiento;
$edad;
$documento;
$titulou;
$id;

while($profesor = mysqli_fetch_array($datosprofesor)){
    $id = $profesor['id_profesor'];
    $nombre = $profesor['nombre'];
    $apellido = $profesor['apellido']; 
    $fechanacimiento = $profesor['fechanacimiento'];
    $edad = $profesor['edad'];
    $documento = $profesor['documento'];
    $titulou = $profesor['titulou'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2><center>REGISTRO PROFESOR</center></h2>
    <form action="controlador/editar.php"method="POST">

        <input type="hidden" name="id_profesor" value="<?php echo $id; ?>">
        <label for="">NOMBRE</label><input type="text" name="nombre" id="nombre"value="<?php echo $nombre?>"><p>
        <label for="">APELLIDO</label><input type="text" name="apellido" id="apellido"value="<?php echo $apellido?>"><p>
        <label for="">EDAD</label><input type="text" name="edad" id="edad"value="<?php echo $edad?>"><p>
        <label for="">FECHA NACIMIENTO</label><input type="date" name="fechanacimiento" id="fechanacimiento"value="<?php echo $fechanacimiento?>"><p>  
        <label for="">DOCUMENTO</label><input type="text" name="documento" id="documento"value="<?php echo $documento?>"><p>
        <label for="">TITULO UNIVERSITARIO</label><input type="text" name="titulou" id="titulou"value="<?php echo $titulou?>"><p>          
         
                <input type="submit" value="EDITAR  "><p>

</body>
</html>