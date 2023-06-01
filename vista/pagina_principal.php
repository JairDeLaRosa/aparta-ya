<?php
session_start();
include '../controlador/mostrarUsuario.php';
include '../controlador/mostrartodasLasPropiedades.php';
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
    <link rel="icon"  href="img/logo.ico">
    <title>ApartaYa</title>
    <link rel="stylesheet" type='text/css' media='screen' href="css/estilos.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/eventos.js"></script>
</head>
<body>
    <header>
        <nav>
            <div id="logo"><a href="pagina_principal.php"><img src="img/logo.png" alt="logo"></a></div>
            <div id="li1"><a href="pagina_principal.php">Inicio</a></div>
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


    <div id="columna-izquierda">
        <section id="section-1">
            <a href="perfil.php?id=<?php echo $usuarios['idUsuario']?>"><div id="cabeza-1" >
                <img id="perfil-2" src="img/usuario.jpg" alt="foto-perfil">
                <p id="nombre"> <?php 
                echo $usuarios['nombre'];
                echo '<br>';
                echo $usuarios['apellidos'];
                ?></p>
            </div></a>

            <div id="agregar">
                <img src="img/logo-agregar-azul.png" alt="agregar">
                <p><a href="agregarPropiedad.php">Agregar</a></p>
            </div>

        </section>

        <section id="section-2">
            <div id="cabeza-2">
                <img src="img/logo-propiedadesFavoritas-rojo.png" alt="propiedadesFavoritas">
                <p>Propiedades <br> favoritas</p>
            </div>
            <div class="favoritos">
                <img src="img/usuario.jpg" alt="las-malvinas">
                <div><p class="titulo">Las malvinas</p><p class="direccion">Cra 20 #20-40</p></div>
            </div>
            <div class="favoritos">
                <img src="img/usuario.jpg" alt="los-laureles">
                <div><p class="titulo">Los laureles</p><p class="direccion">Cra 39 #10-30</p></div>
            </div>
            <div class="favoritos">
                <img src="img/usuario.jpg" alt="VillaMarbella">
                <div><p class="titulo">Villa marbella</p><p class="direccion">Cra 19 #9-10</p></div>
            </div>
        </section>
    </div>

    <div id="columna-derecha">
        <section id="section-1-d">
            <div id="cabeza-1-d">
                <img src="img/logo-notificacion-rojo.png" alt="notificaciones">
                <p>Notificaciones <br> recientes</p>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/usuario.jpg" alt="jose-armando">
                <div><p class="nombre">Jose Armando</p><p class="notificacion">Le ha gustado una de tus publicaciones...
                    <img src="img/logo-like-rojo.png" alt="logo-like-rojo"></p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/usuario.jpg" alt="andres-barbosa">
                <div><p class="nombre">Andres Barbosa</p><p class="notificacion">Le ha gustado una de tus publicaciones...
                    <img src="img/logo-like-rojo.png" alt="logo-like-rojo">
                </p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/usuario.jpg" alt="julia-delrio">
                <div><p class="nombre">julia Del Rio</p><p class="notificacion">¡Quiere arrendar una de tus pripierdades!
                    <img src="img/logo-notificacionDeArriendo-rojo.png" alt="arrendar">
                </p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/usuario.jpg" alt="sophia-guzman">
                <div><p class="nombre">Sophia Guzman</p><p class="notificacion">Le ha gustado una de tus publicaciones...
                    <img src="img/logo-like-rojo.png" alt="logo-like-rojo">
                </p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/usuario.jpg" alt="alberto-florez">
                <div><p class="nombre">Alberto Florez</p><p class="notificacion">Ha calificado una de tus publicaciones...
                    <img src="img/logo-calificacion-rojo.png" alt="calificacion">
                </p>
                    </div>
            </div>
        </section>
    </div>
    <div id="buscar"><form>
        <input class="text" type="text" name="Barrio" placeholder="Barrio">
        <input class="text" type="text" name="Tipo" placeholder="Tipo">
        <input class="text" type="text" name="Precio" placeholder="Precio">
        <input id="buscar-2" type="button" name="Buscar" value="Buscar">
    </form></div>
    <div id="container-tarjetas">
    <?php while($row1 = mysqli_fetch_assoc($todasLasPropiedades)){
        $servicio = buscarServicio($row1['idServicios']);
    ?>
        <div class="tarjeta">
            <div class="tarjeta-cabeza">
        <p class="p-barrio"><?php echo $row1['barrio']; ?></p>
        <p class="p-tipo"><?php echo $row1['tipo']; ?></p>
        <p class="p-direccion"><?php echo $row1['direccion']; ?></p></div>
            <img id="tarjeta-imagenPrincipal" src="img/VillaMarbella.jpg" alt="propiedad">
            <div id="info-carta">
                <p class="p-serviciosIncluidos"><b>Servicios Incluidos</b></p>
                <p class="p-habitaciones">Habitaciones: <p id="habitaciones"><?php echo $row1['habitaciones']; ?></p></p>
                <p class="p-banos">Baños: <p id="banos"><?php echo $row1['baños']; ?></p></p>
                <h2 class="h2-precio">Precio: <h2 id="precio">$<?php echo $row1['precio']; ?></h2></h2>
                <p class="p-wifi">Wifi: <p id="wifi"><?php echo $servicio['wifi'];?></p></p>
                <p class="p-aire">Aire_AC: <p id="aire"><?php echo $servicio['aireAC'];?></p></p>
                <p class="p-gas">Gas: <p id="gas"><?php echo $servicio['gas'];?></p></p>
                <p class="p-agua">Agua: <p id="agua"><?php echo $servicio['agua'];?></p></p>
                <p class="p-luz">Luz: <p id="luz"><?php echo $servicio['luz'];?></p></p>
                <img class="like" src="img/logo-favorito-rojo.png" alt="like">
                <img class="comentarios" src="img/logo-comentario-rojo.png" alt="comentarios">
                <img class="calificacion" src="img/logo-calificacion-rojo.png" alt="calificacion">
                <a href="#" class="contactarPropietario">Contactar Arrendatario</a>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
    
    
</body>
</html>