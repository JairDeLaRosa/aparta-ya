<?php
include '../modelo/buscarPropiedad.php';
function buscarServicio($idServicio) {
        $servicio = buscarServicios($idServicio);
        return $servicio;
    }
    $todasLasPropiedades = todasLasPropiedades();