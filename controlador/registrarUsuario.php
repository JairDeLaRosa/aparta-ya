<?php
include '../modelo/registrar.php';

    if(!empty($_POST['nombre']) and !empty($_POST['apellidos']) and !empty($_POST['email']) and !empty($_POST['contrasena']) and !empty($_POST['barrio']) and !empty($_POST['direccion'])){
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $contrasena = $_POST['contrasena'];
        $barrio = $_POST['barrio'];
        $direccion = $_POST['direccion'];
        $registro = registrar($nombre,$apellidos,$email,$contrasena,$barrio,$direccion);
        if($registro){
            echo '<div>¡Registro realizado exitosamente!</div>';
        }else{
            echo '<div>El correo insertado ya se encuentra registrado</div>';
        }
    } else{
        echo '<div>Por favor completar todos los campos</div>';
    }



