<?php
session_start();
include '../modelo/eliminarPropiedad.php';
include '../controlador/mostrarUsuario.php';
$idPropiedad=$_GET['idPropiedad'];
$idServicio=$_GET['idServicio'];
$resultado = eliminarPropiedad($idPropiedad, $idServicio);
$url="../vista/perfil.php?id=".urlencode($usuarios['idUsuario']);
if($resultado==true){
    header("location: ".$url);
}else{
    header("location: ".$url);
}
