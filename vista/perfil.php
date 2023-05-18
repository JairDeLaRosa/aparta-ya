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
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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

        <div><a href="../controlador/eliminarPropiedad.php?idPropiedad=<?php echo $row1['idpropiedades']?>&idServicio=<?php echo $servicio['idservicios']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="../controlador/eliminarPropiedad.php?idPropiedad=<?php echo $row1['idpropiedades']?>&idServicio=<?php echo $servicio['idservicios']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a></div>
        
    </div>
    <?php
    }
    ?>
</body>
</html>