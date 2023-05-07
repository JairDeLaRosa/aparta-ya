<?php
function registrar($nombre, $apellidos, $email, $contrasena, $barrio, $direccion){
include 'conexion.php';
$query="INSERT INTO usuarios(nombre, apellidos, email, contrasena, direccion, barrio)
VALUES('$nombre','$apellidos','$email','$contrasena','$direccion','$barrio')";

$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email'");

if(mysqli_num_rows($verificar_correo)>0){
    return false;
}

$ejecutar = mysqli_query($conexion,$query);

if($ejecutar){
    return true;
}
}


/*include '../modelo/conexion.php';

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$barrio = $_POST['barrio'];
$direccion = $_POST['direccion'];

$query="INSERT INTO usuarios(nombre, apellidos, email, contrasena, direccion, barrio)
VALUES('$nombre','$apellidos','$email','$contrasena','$direccion','$barrio')";

$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE email='$email'");

if(mysqli_num_rows($verificar_correo)>0){
    echo '<script>
    alert("Este correo ya esta registado, intenta con otro diferente");
    window.location = "../index.php";
    </script>';
    exit();
}

$ejecutar = mysqli_query($conexion,$query);

if($ejecutar){
    echo '<script>
    alert("Usuario registrado exitosamente");
    window.location = "../index.php";
    </script>';
}else{
    echo '<script>
    alert("Usuario no registrado, intentelo nuevamente");
    window.location = "../index.php";
    </script>';
}*/
?>