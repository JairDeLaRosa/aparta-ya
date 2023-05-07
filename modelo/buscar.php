<?php
function buscarNombre($email){
    include 'conexion.php';
    $query="SELECT nombre, apellidos FROM usuarios WHERE email = '$email'";
    $nombre=mysqli_query($conexion,$query);
    $row= $nombre->fetch_assoc();
    return $row;
}
?>