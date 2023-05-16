<?php
session_start();
include '../modelo/editarPropiedad.php';
if(!empty($_POST['tipo']) and !empty($_POST['precio']) and !empty($_POST['habitaciones']) and !empty($_POST['banos']) and !empty($_POST['barrio']) and !empty($_POST['direccion'])
and !empty($_POST['wifi']) and !empty($_POST['aire_ac']) and !empty($_POST['gas']) and !empty($_POST['agua']) and !empty($_POST['luz'])){
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $habitaciones = $_POST['habitaciones'];
    $barrio = $_POST['barrio'];
    $direccion = $_POST['direccion'];
    $banos = $_POST['banos'];
    $wifi = $_POST['wifi'];
    $aire_ac = $_POST['aire_ac'];
    $gas = $_POST['gas'];
    $agua = $_POST['agua'];
    $luz = $_POST['luz'];
    $editar = editarP($tipo, $precio, $habitaciones, $barrio, $direccion, $banos, $wifi, $aire_ac, $gas, $agua, $luz,$_SESSION ['email']);
    if($registro==true){
    echo '<div>Actualización exitosa</div>';
    }else{
    echo '<div>Error al actualizar</div>';
    }
    }else{
        echo '<div>Por favor completar todos los campos</div>';
    }
?>