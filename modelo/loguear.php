<?php

    function validarLogin($email, $contrasena){
        include 'conexion.php';
        $result = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email = '$email' AND contrasena = '$contrasena'");
        if(mysqli_num_rows($result) > 0){
            return true;
        }else{
            return false;
        }

    }