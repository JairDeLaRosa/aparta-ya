<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <title>Agregar Propiedad</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <form action="agregarPropiedad.php" method="POST">
        <div></div>
        <input type="text" placeholder="TIPO" name="tipo">
        <input type="number" placeholder="PRECIO" name="precio">
        <input type="text" placeholder="HABITACIONES" name="habitaciones">
        <input type="text" placeholder="BAÑOS" name="banos">
        <input type="text" placeholder="BARRIO" name="barrio">
        <input type="text" placeholder="DIRECCIÓN" name="direccion">
        <div>Servicios</div>
        <input type="text" placeholder="WIFI" name="wifi">
        <input type="text" placeholder="AIRE_AC" name="aire_ac">
        <input type="text" placeholder="GAS" name="gas">
        <input type="text" placeholder="AGUA" name="agua">
        <input type="text" placeholder="LUZ" name="luz">
        <button name="btn1">Actualizarrrrrrrrrr</button>
    </form>
    <?php
            if (isset($_POST['btn1'])) {
                include '../controlador/editarPropiedad.php';
            }
            ?>
</body>
</html>