<?php
function buscarUsuario($email){
    include 'conexion.php';
    $query="SELECT * FROM usuarios WHERE email = '$email'";
    $usuarios=mysqli_query($conexion,$query);
    $row= $usuarios->fetch_assoc();
    return $row;
}
?>