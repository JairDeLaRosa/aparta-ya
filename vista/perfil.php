<?php
session_start();
include '../controlador/mostrarUsuario.php';
include '../controlador/mostrarPropiedad.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    echo $usuarios['nombre'];
    echo ' ';
    echo $usuarios['apellidos'];?></title>
</head>
<body>
    <a href="modificar.php">modificar</a>
    <div><?php 
    echo $usuarios['nombre'];
    echo ' ';
    echo $usuarios['apellidos'];?></div>
    <a href="pagina_principal.php">atras</a>
    <h1>Propiedades</h1>
    <?php
    $cont=0;
    while($row1 = mysqli_fetch_assoc($propiedades)){
        $cont++;
        $servicio = buscarServicio($row1['idServicios']);
    ?>
    <div>
        <h2>Propiedad #<?php
        echo $cont;
        ?></h2>
        <p>Tipo: <p><?php echo $row1['tipo']; ?></p></p>
        <p>Barrio: <p><?php echo $row1['barrio']; ?></p></p>
        <p>Dirección: <p><?php echo $row1['direccion']; ?></p></p>
        <p>Habitaciones: <p><?php echo $row1['habitaciones']; ?></p></p>
        <p>Baños: <p><?php echo $row1['baños']; ?></p></p>
        <p>Precio: <p><?php echo $row1['precio']; ?></p></p>
        <p>Wifi: <p><?php echo $servicio['wifi'];?></p></p>
        <p>Aire AC: <p><?php echo $servicio['aireAC'];?></p></p>
        <p>Gas: <p><?php echo $servicio['gas'];?></p></p>
        <p>Agua: <p><?php echo $servicio['agua'];?></p></p>
        <p>Luz: <p><?php echo $servicio['luz'];?></p></p>
    </div>
    <?php
    }
    ?>
</body>
</html>