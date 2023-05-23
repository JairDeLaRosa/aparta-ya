<?php
function buscarPropiedades($idUsuario){
    include 'conexion.php';
    $query="SELECT * FROM propiedades WHERE idUsuario = '$idUsuario'";
    $propiedades=mysqli_query($conexion,$query);
    return $propiedades;
}
function buscarServicios($idServicio){
    include 'conexion.php';
    $query="SELECT * FROM servicios WHERE idservicios = '$idServicio'" ;
    $servicios=mysqli_query($conexion,$query);
    $row= $servicios->fetch_assoc();
    return $row;
}
function todasLasPropiedades(){
    include 'conexion.php';
    $query="SELECT * FROM propiedades";
    $propiedades=mysqli_query($conexion,$query);
    return $propiedades;
}
?>