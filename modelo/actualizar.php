<?php
function actualizar($contrasena, $barrio, $direccion, $emailSesion){
    include 'conexion.php';
    $query="UPDATE `usuarios` SET `contrasena` = '$contrasena',
     `direccion` = '$barrio', `barrio` = '$direccion' WHERE `usuarios`.`email` = '$emailSesion'";
    $ejecutar = mysqli_query($conexion,$query);
    
    if($ejecutar){
        return true;
    }else{
        return false;
    }
    }
?>

