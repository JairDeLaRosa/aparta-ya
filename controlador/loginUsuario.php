<?php
session_start();
include '../modelo/loguear.php';

$email= $_POST['email'];
$contrasena= $_POST ['contrasena'];
    if(validarLogin($email, $contrasena)){
        $_SESSION ['email']=$email;
        header("location: ../vista/pagina_principal.php");
        exit();
        return true;
    }else{
        echo '<script>
        window.location = "../index.php";
        </script>';
        exit();
        return false;
    }

