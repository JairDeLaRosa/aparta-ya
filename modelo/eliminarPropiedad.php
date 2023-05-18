<?php
function eliminarPropiedad($idPropiedad, $idServicio){
    include 'conexion.php';
    $query1="DELETE FROM propiedades WHERE idpropiedades = '$idPropiedad'";
    $query2="DELETE FROM servicios WHERE idservicios = '$idServicio'";
    $result1=mysqli_query($conexion, $query1);
    $result2=mysqli_query($conexion, $query2);
    if(!($result1 and $result2)){
        return false;
    }else{
        return true;
    }
}