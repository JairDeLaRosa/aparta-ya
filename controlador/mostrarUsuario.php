<?php
    include '../modelo/buscarUsuario.php';
    $usuarios = buscarUsuario($_SESSION ['email']);
    

