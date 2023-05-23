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
    <link rel="stylesheet" type='text/css' media='screen' href="css/estilos.css">
    <link rel="stylesheet" type='text/css' media='screen' href="css/estiloPerfil.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/eventos.js"></script>
</head>
<body>
    <header>
        <nav>
            <div id="logo"><a href="pagina_principal.php"><img src="img/logo.png" alt="logo"></a></div>
            <div id="li1"><a href="perfil.php?id=<?php echo $usuarios['idUsuario']?>">Perfil</a></div>
            <div id="li2"><a href="#">Mensajes</a></div>
            <div id="li4"><img id="perfil" src="img/usuario.jpg" alt="foto-perfil">
            <ul>
                <li><a href="perfil.php?id=<?php echo $usuarios['idUsuario']?>">Ver perfil</a></li>
                <li><a href="modificar.php">Editar información</a></li>
                <li><a href="../controlador/cerrarSesion.php">Cerrar sesión</a></li>
            </ul></div>
            <img id="flecha" src="img/flecha.png" alt="flecha">
        </nav>
    </header>
    <div class="container-principal">
        <img src="img/usuario.jpg" alt="Usuario">
        <h2 class="nombreUsuario"><?php 
        echo $usuarios['nombre'];
        echo ' ';
        echo $usuarios['apellidos'];?></h2>
        <h4 class="numeroDePropiedades">2 propiedades</h4>
        <a class="agregarPropiedad" href="agregarPropiedad.php">Agregar Propiedad</a>
        <a class="editarPerfil" href="modificar.php">Editar Perfil</a>
    </div>
    <form class="container-BuscarPropiedad">
        <h2>Tus Propiedades</h2>
        <input class="barrio" type="text" name="Barrio" placeholder="Barrio">
        <input class="tipo" type="text" name="Tipo" placeholder="Tipo">
        <input class="precio" type="text" name="Precio" placeholder="Precio">
        <input id="buscarPropiedad" type="button" name="Buscar" value="Buscar">
    </form>
    <div class="container-Propiedades">
       <?php while($row1 = mysqli_fetch_assoc($propiedades)){
        $servicio = buscarServicio($row1['idServicios']);
    ?>
    <div class="Propiedad">
            <img src="img/VillaMarbella.jpg" alt="propiedad">
                <p class="p-tipo">Tipo: <p id="tipo"><?php echo $row1['tipo']; ?></p></p>
                <p class="p-barrio">Barrio: <p id="barrio"><?php echo $row1['barrio']; ?></p></p>
                <p class="p-direccion">Dirección: <p id="direccion"><?php echo $row1['direccion']; ?></p></p>
                <p class="p-habitaciones">Habitaciones: <p id="habitaciones"><?php echo $row1['habitaciones']; ?></p></p>
                <p class="p-banos">Baños: <p id="banos"><?php echo $row1['baños']; ?></p></p>
                <h2 class="h2-precio">Precio: <h2 id="precio">$<?php echo $row1['precio']; ?></h2></h2>
                <p class="p-wifi">Wifi: <p id="wifi"><?php echo $servicio['wifi'];?></p></p>
                <p class="p-aire">Aire_AC: <p id="aire"><?php echo $servicio['aireAC'];?></p></p>
                <p class="p-gas">Gas: <p id="gas"><?php echo $servicio['gas'];?></p></p>
                <p class="p-agua">Agua: <p id="agua"><?php echo $servicio['agua'];?></p></p>
                <p class="p-luz">Luz: <p id="luz"><?php echo $servicio['luz'];?></p></p>
              
                <a class="editar" href="editarPropiedad.php?idPropiedad=<?php echo $row1['idpropiedades']?>&idServicio=<?php echo $servicio['idservicios']?>">
                    Editar</a>
                <a class="eliminar" href="../controlador/eliminarPropiedad.php?idPropiedad=<?php echo $row1['idpropiedades']?>&idServicio=<?php echo $servicio['idservicios']?>">
                  Eliminar</a>
                  
            
        </div>
        <?php
    }
    ?>
    </div>
    
</body>
</html>