<?php
    include "clases/conexion.php";
    include "clases/profesor.php";

    $objconexion = new conexion();
    $objprofesor = new profesor();

    $objconexion = $objconexion->conectar();
    $profesores = $objprofesor->consultar($objconexion);


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
    <table>
        <tr>
            <th>nombre</th>
            <th>apellido</th>
            <th>edad</th>
            <th>fechanacimiento</th>
            <th>documento</th>
            <th>titulou</th>
            <th>editar</th>
            <th>eliminar</th>
        </tr>

    
    <?php
        while($profesor = mysqli_fetch_array($profesores)){

    ?>
        <tr>
            <td><?php echo $profesor['nombre'] ?></td>
            <td><?php echo $profesor['apellido'] ?></td>
            <td><?php echo $profesor['edad'] ?></td>
            <td><?php echo $profesor['fechanacimiento'] ?></td>
            <td><?php echo $profesor['documento'] ?></td>
            <td><?php echo $profesor['titulou'] ?></td>
            <td><a href="editar.php?id= <?php echo $profesor['id_profesor']?>">editar</a></td>
            <td><a href="controlador/eliminar.php?id_profesor=<?php echo $profesor['id_profesor']?>">ELIMINAR</a></td>


        </tr>

    <?php
         }
    ?>
    </table>
    
</body>
</html>