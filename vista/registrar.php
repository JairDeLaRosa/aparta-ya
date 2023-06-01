<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="javascript.svg" type="image/x-icon">
  <link rel="icon"  href="img/logo.ico">
  <title>Registrarse</title>
  <!-- Estilos -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/registro.css">
</head>

<body>
  <div class="app">
    <div class="sectionLogin app__container--form">
      <div class="app__buttonBack--container">
        <i class="fa-solid fa-chevron-left app__buttonBack__symbol"></i>
        <a href="../index.php" class="app__link--back">ATRAS</a>
      </div>
      <div class="app__container--title">
        <h1 class="app__title">Registrate</h1>
        <span class="app__subtitle">Si ya es miembro, puede iniciar sesión con su dirección de correo electrónico y contraseña.</span>
        <?php
      if (isset($_POST['btn1'])) {
          include '../controlador/registrarUsuario.php';
      }
      ?>
      </div>
      <form action="" class="app__form" method="POST">
        <div class="app__form__sectionText groupEmail">
          <span class="app__form__sectionText__title">Correo</span>
          <input type="text" placeholder="Correo electrónico" id="input--Correo" name="email">
        </div>
        <div class="app__form__sectionPassword">
          <span class="app__form__sectionPassword__title">Contraseña</span>
          <input type="password" placeholder="Contraseña" id="input--Password" name="contrasena">
        </div>
        <div class="app__form__sectionText second-Line">
          <span class="app__form__sectionText__title">Nombre</span>
          <input type="text" placeholder="Nombre" id="input--nombre" name="nombre">
        </div>
        <div class="app__form__sectionText second-Line">
          <span class="app__form__sectionText__title">Apellido</span>
          <input type="text" placeholder="Apellido" id="input--apellido" name="apellidos">
        </div>
        <div class="app__form__sectionText second-Line">
          <span class="app__form__sectionText__title">Barrio</span>
          <input type="text" placeholder="Barrio" id="input--city" name="barrio">
        </div>
        <div class="app__form__sectionText second-Line">
          <span class="app__form__sectionText__title">Direccion</span>
          <input type="text" placeholder="Direccion" id="input--direccion" name="direccion">
        </div>
        <button class="app__form__button button--singIn-First " name="btn1">Registrarme</button>
      </form>
    </div>
    <div class="sectionLogin app__container--Img">
      <img src="img/logo-transparent.png" alt="logo casas">
    </div>
  </div>
  <script src="https://kit.fontawesome.com/5ad8ae8b3e.js" crossorigin="anonymous"></script>

</body>

</html>