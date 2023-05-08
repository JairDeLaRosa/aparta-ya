<?php
    include '../modelo/buscar.php';
    $nombre = buscarUsuario($_SESSION ['email']);
    echo $nombre['nombre'];
    echo '<br>';
    echo $nombre['apellidos'];

