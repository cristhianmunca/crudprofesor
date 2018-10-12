<?php

class profesor{

    public function registrar($conexion,$nombre, $apellido, $edad, $fechanacimiento, $documento, $titulou){
       
         $query = "INSERT INTO profesor (nombre,apellido,edad,fechanacimiento,documento,titulou) 
        VALUES ('$nombre', '$apellido', $edad, '$fechanacimiento', '$documento', '$titulou')";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "profesor registrado";

        }else{
            $respuesta = "error al registrar";
        }
        return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM profesor";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function consultarId($conexion, $id){
        $query = "SELECT * FROM profesor where id_profesor = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }
    public function editar($conexion,$id,$nombre, $apellido,$edad, $fechanacimiento, $documento ,$titulou){
        $query = "UPDATE profesor set nombre = '$nombre', apellido = '$apellido',
        edad = '$edad', fechanacimiento = '$fechanacimiento', documento = '$documento', titulou = '$titulou' 
        where id_profesor = $id";

        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "profesor actualizado";
        }else{
            $respuesta = "problemas al actualizar";
        }
        return $respuesta;
    }
    public function eliminar($conexion, $id){
        $query = "DELETE FROM profesor WHERE id_profesor = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "profesor eliminado";
        }else{
            $respuesta = "problemas al eliminar";
        }
        return $respuesta;
    }
}