<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>modificar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <body>
        <div class="app">
          <div class="sectionLogin app__container--form">
            <div class="app__buttonBack--container">
              <i class="fa-solid fa-chevron-left app__buttonBack__symbol"></i>
              <a href="pagina_principal.php" class="app__link--back">ATRAS</a>
            </div>
            <div class="app__container--title">
              <h1 class="app__title">Editar perfil</h1>
              <span class="app__subtitle">Puede modificar su contraseña, barrio y dirección</span>
              <?php
            if (isset($_POST['btn1'])) {
                include '../controlador/modificarUsuario.php';
            }
            ?>
            </div>
            <form action="" class="app__form" method="POST">
              <div class="app__form__sectionPassword">
                <span class="app__form__sectionPassword__title">Nueva contraseña</span>
                <input type="password" placeholder="Contraseña" id="input--Password" name="contrasena">
              </div>
              <div class="app__form__sectionText second-Line">
                <span class="app__form__sectionText__title">Nuevo barrio</span>
                <input type="text" placeholder="Barrio" id="input--city" name="barrio">
              </div>
              <div class="app__form__sectionText second-Line">
                <span class="app__form__sectionText__title">NUeva direccion</span>
                <input type="text" placeholder="Direccion" id="input--direccion" name="direccion">
              </div>
              <button class="app__form__button button--singIn-First " name="btn1">Modificar perfil</button>
            </form>
          </div>
          <div class="sectionLogin app__container--Img">
            <img src="img/logo-transparent.png" alt="logo casas">
          </div>
        </div>
        <script src="https://kit.fontawesome.com/5ad8ae8b3e.js" crossorigin="anonymous"></script>
      
      </body>
</body>
</html>