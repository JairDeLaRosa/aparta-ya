<?php
    include '../modelo/buscarPropiedad.php';
    $propiedades = buscarPropiedades($_GET['id']);
    function buscarServicio($idServicio) {
        $servicio = buscarServicios($idServicio);
        return $servicio;
    }