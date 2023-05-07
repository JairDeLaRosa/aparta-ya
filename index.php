<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/javascript.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="vista/css/style.css">
  <link rel="stylesheet" href="vista/css/form.css">
  <link rel="stylesheet" href="vista/css/button.css">
  <link rel="stylesheet" href="vista/style.css">
</head>

<body>
  <div class="app">
    <div class="sectionLogin app__container--Img">
      <img src="vista/img/logo-transparent.png" alt="logo casas">
    </div>
    <div class="sectionLogin app__container--form">
      <div class="app__container--title">
        <h1 class="app__title">INICIAR SESION</h1>
        <span class="app__subtitle">Si ya es miembro, puede iniciar sesión con su dirección de correo electrónico y
          contraseña.</span>
      </div>
      <form action="controlador/loginUsuario.php" method="POST" class="app__form">
        <div class="app__form__sectionText">
          <span class="app__form__sectionText__title">Correo</span>
          <input type="text" placeholder="CORREO ELECTRONICO" id="login--Email" name="email">
        </div>
        <div class="app__form__sectionPassword">
          <span class="app__form__sectionPassword__title">Contraseña</span>
          <input type="password" placeholder="CONTRASEÑA" id="login--Password" name="contrasena">
        </div>
        <div class="app__form__sectionCheckbox">
          <input type="checkbox">
          <span class="app__form__sectionCheckbox__title">Recordar datos</span>
        </div>
        <button class="app__form__button" id="button--login">Iniciar sesion</button name= "button">
      </form>
      <a target="_self" href="vista/registrar.php" class="app__link--Register">¿No tienes una cuenta?
        ¡Registrate Aquí!</a>
    </div>
  </div>
  <script type="module" src="js/manageLogIn.js"></script>
  <script src="https://kit.fontawesome.com/5ad8ae8b3e.js" crossorigin="anonymous"></script>
</body>

</html>