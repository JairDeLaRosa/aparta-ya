<?php
session_start();
include '../controlador/mostrarUsuario.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="icon"  href="img/logo.ico">
  <title>Editar Propiedad</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/button.css">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
  <link rel="stylesheet" href="css/addProp.css">
</head>

<body>
  <a href="perfil.php?id=<?php echo $usuarios['idUsuario']?>">Perfil</a>
  <form action="editarPropiedad.php?idPropiedad=<?php echo $_GET['idPropiedad'];?>&idServicio=<?php echo $_GET['idServicio'];?>" method="POST" >
    <section class="form">
      <div class="container--form">
        <h2>Propiedades</h2>
        <input type="text" placeholder="TIPO" name="tipo">
        <input type="number" placeholder="PRECIO" name="precio">
        <input type="text" placeholder="HABITACIONES" name="habitaciones">
        <input type="text" placeholder="BAÑOS" name="banos">
        <input type="text" placeholder="BARRIO" name="barrio">
        <input type="text" placeholder="DIRECCIÓN" name="direccion">
      </div>
      <div class="container--form">
        <h2>Servicios incluidos</h2>
        <input type="text" placeholder="WIFI" name="wifi">
        <input type="text" placeholder="AIRE_AC" name="aire_ac">
        <input type="text" placeholder="GAS" name="gas">
        <input type="text" placeholder="AGUA" name="agua">
        <input type="text" placeholder="LUZ" name="luz">
        <input class="gets" type="number" value="<?php echo $_GET['idPropiedad']; ?>" name="idPropiedad">
        <input class="gets" type="number" value="<?php echo $_GET['idServicio']; ?>" name="idServicio">
      </div>
    </section>
    <button class="form__button" name="btn1">Editar Propiedad</button>
    <?php
            if (isset($_POST['btn1'])) {
                include '../controlador/editarPropiedad.php';
                if ($editarPropiedad){?>
                <script>alert("Actualización exitosa")</script>
                <?php
                $url="../vista/perfil.php?id=".urlencode($usuarios['idUsuario']);
                header("location: ".$url);
                ?>
                <?php
                } else { ?>
                <h1>ocurrio un error</h1>
                <?php
                }            
            }
            ?> 
  </form>
   
</body>

</html>