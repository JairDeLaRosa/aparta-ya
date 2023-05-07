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
    <link rel="stylesheet" type='text/css' media='screen' href="css/estilos.css">
    <script src="js/jquery-3.6.4.min.js"></script>
    <script src="js/eventos.js"></script>
</head>
<body>
    <header>
        <nav>
            <div id="logo"><img src="img/logo.png" alt="logo"></div>
            <div id="li1"><img src="img/logo-inicio-rojo.png" alt="Inicio"><a href="pagina_principal.php">Inicio</a></div>
            <div id="li2"><img src="img/logo-chat-azul.png" alt="mensajes"><a href="#">Mensajes</a></div>
            <div id="li4"><img id="perfil" src="img/foto-perfil.jpg" alt="foto-perfil">
            <ul>
                <li><a href="perfil.php">Ver perfil</a></li>
                <li><a href="modificar.php">Editar información</a></li>
                <li><a href="../controlador/cerrarSesion.php">Cerrar sesión</a></li>
            </ul></div>
            <img id="flecha" src="img/flecha.png" alt="flecha">
        </nav>
    </header>


    <div id="columna-izquierda">
        <section id="section-1">
            <a href="perfil.php"><div id="cabeza-1" >
                <img id="perfil-2" src="img/foto-perfil.jpg" alt="foto-perfil">
                <p id="nombre"> <?php 
                include '../controlador/mostrar.php';
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
                <img src="img/las-malvinas.jpg" alt="las-malvinas">
                <div><p class="titulo">Las malvinas</p><p class="direccion">Cra 20 #20-40</p></div>
            </div>
            <div class="favoritos">
                <img src="img/los-laureles.jpg" alt="los-laureles">
                <div><p class="titulo">Los laureles</p><p class="direccion">Cra 39 #10-30</p></div>
            </div>
            <div class="favoritos">
                <img src="img/VillaMarbella.jpg" alt="VillaMarbella">
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
                <img class="notificaciones-fotoPerfil" src="img/jose-armando.jpg" alt="jose-armando">
                <div><p class="nombre">Jose Armando</p><p class="notificacion">Le ha gustado una de tus publicaciones...
                    <img src="img/logo-like-rojo.png" alt="logo-like-rojo"></p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/andres-barbosa.jpg" alt="andres-barbosa">
                <div><p class="nombre">Andres Barbosa</p><p class="notificacion">Le ha gustado una de tus publicaciones...
                    <img src="img/logo-like-rojo.png" alt="logo-like-rojo">
                </p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/julia-delrio.jpg" alt="julia-delrio">
                <div><p class="nombre">julia Del Rio</p><p class="notificacion">¡Quiere arrendar una de tus pripierdades!
                    <img src="img/logo-notificacionDeArriendo-rojo.png" alt="arrendar">
                </p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/sophia-guzman.jpg" alt="sophia-guzman">
                <div><p class="nombre">Sophia Guzman</p><p class="notificacion">Le ha gustado una de tus publicaciones...
                    <img src="img/logo-like-rojo.png" alt="logo-like-rojo">
                </p>
                    </div>
            </div>
            <div class="notificaciones">
                <img class="notificaciones-fotoPerfil" src="img/alberto-florez.jpg" alt="alberto-florez">
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
        <div class="tarjeta"><div></div></div>
        <div class="tarjeta"><div></div></div>
        <div class="tarjeta"><div></div></div>
    </div>
    
</body>
</html>