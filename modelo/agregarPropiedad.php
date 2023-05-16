<?php
function agregarPropiedad($tipo, $precio, $habitaciones, $barrio, $direccion, $banos, $wifi, $aire_ac, $gas, $agua, $luz, $emailSesion){

include 'conexion.php';

$query1="INSERT INTO servicios(wifi, aireAC, gas, agua, luz)
VALUES('$wifi','$aire_ac','$gas','$agua','$luz')";

$guardarServicios = mysqli_query($conexion,$query1);

$claveForaneaServicios= "SELECT idservicios FROM servicios WHERE wifi = '$wifi' 
and aireAC='$aire_ac' and gas='$gas' and agua = '$agua' and luz = '$luz'";

$consultarIdServicios= mysqli_query($conexion,$claveForaneaServicios);

$row1= $consultarIdServicios->fetch_assoc();

$idservicios = $row1["idservicios"];

$claveForaneaUsuarios="SELECT idUsuario FROM usuarios WHERE email='$emailSesion'";

$consultarIdUsuario= mysqli_query($conexion,$claveForaneaUsuarios);

$row2= $consultarIdUsuario->fetch_assoc();

$idusuarios= $row2["idUsuario"];

$query2= "INSERT INTO propiedades(tipo, precio, habitaciones, baños, barrio, direccion, idServicios, idUsuario)
VALUES('$tipo','$precio','$habitaciones','$banos','$barrio','$direccion','$idservicios','$idusuarios')";

$guardarPropiedad = mysqli_query($conexion,$query2);

if($guardarServicios and $guardarPropiedad){
    return true;
}else{
    return false;
}
}