<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="modificar.php">modificar</a>
    <?php 
    include '../controlador/mostrar.php';
    ?>
    <a href="pagina_principal.php">atras</a>
</body>
</html>