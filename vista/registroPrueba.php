<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="img/logo.ico">
    <title>registro.php</title>
</head>
<body>
    <form action="registro.php" method="POST">
        <input type="text" placeholder="NOMBRE" name="nombre">
        <input type="text" placeholder="APELLIDOS" name="apellidos">
        <input type="text" placeholder="EMAIL" name="email">
        <input type="password" placeholder="CONTRASEÑA" name="contrasena">
        <input type="text" placeholder="barrio" name="barrio">
        <input type="text" placeholder="DIRECCIÓN" name="direccion">
        <button name="btn1">Registrarse</button>
    </form>
    <?php
    if (isset($_POST['btn1'])) {
        include '../controlador/registrarUsuario.php';
    }
    ?>
</body>
</html>