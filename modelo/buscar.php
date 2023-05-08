<?php
function buscarUsuario($email){
    include 'conexion.php';
    $query="SELECT * FROM usuarios WHERE email = '$email'";
    $nombre=mysqli_query($conexion,$query);
    $row= $nombre->fetch_assoc();
    return $row;
}
?>