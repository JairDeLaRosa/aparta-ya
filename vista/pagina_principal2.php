<?php
session_start();
if(!isset($_SESSION['email'])){
    header("Location: ../index.php");
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApartaYa</title>
</head>
<body>
    <h1><?php 
    include '../controlador/mostrar.php';
    ?> </h1>
    <a href="../controlador/cerrarSesion.php">cerrar sesion</a>
    <a href="perfil.php">ver perfil</a>
    <div></div>
</body>
</html>