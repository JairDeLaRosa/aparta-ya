<?php
function editarPropiedad($tipo, $precio, $habitaciones, $barrio, $direccion, $banos, $wifi, $aire_ac, $gas, $agua, $luz, $idPropiedad, $idServicio){
    include 'conexion.php';
    $query1="UPDATE `propiedades` SET `tipo`='$tipo', `precio`='$precio', `habitaciones`='$habitaciones', `baños`='$banos',
    `barrio`='$barrio', `direccion`='$direccion' WHERE `propiedades`.`idpropiedades` = '$idPropiedad'";

    $editarPropiedad = mysqli_query($conexion,$query1);

    $query2= "UPDATE `servicios` SET `wifi`='$wifi', `aireAC`='$aire_ac', `gas`='$gas', `agua`='$agua',
    `luz`='$luz' WHERE `servicios`.`idservicios` = '$idServicio'";

    $editarServicio = mysqli_query($conexion,$query2);

    if($editarServicio and $editarPropiedad){
      return true;
       }else{
        return false;
        }
}