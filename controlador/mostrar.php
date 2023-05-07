<?php
    include '../modelo/buscar.php';
    $nombre = buscarNombre($_SESSION ['email']);
    echo $nombre['nombre'];
    echo '<br>';
    echo $nombre['apellidos'];

