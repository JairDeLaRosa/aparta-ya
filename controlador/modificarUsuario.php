<?php
session_start();
include '../modelo/actualizar.php';
 if(!empty($_POST['contrasena']) and !empty($_POST['barrio']) and !empty($_POST['direccion'])){
    $contrasena = $_POST['contrasena'];
    $barrio = $_POST['barrio'];
    $direccion = $_POST['direccion'];
    $registro = actualizar($contrasena,$barrio,$direccion,$_SESSION ['email']);
    if($registro==true){
    echo '<div>Actualización exitosa</div>';
    }else{
    echo '<div>Error al actualizar</div>';
    }
    }else{
        echo '<div>Por favor completar todos los campos</div>';
    }
?>