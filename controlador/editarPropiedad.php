<?php
include '../modelo/editarPropiedad.php';
if(!empty($_POST['tipo']) and !empty($_POST['precio']) and !empty($_POST['habitaciones']) and !empty($_POST['banos']) and !empty($_POST['barrio']) and !empty($_POST['direccion'])
and !empty($_POST['wifi']) and !empty($_POST['aire_ac']) and !empty($_POST['gas']) and !empty($_POST['agua']) and !empty($_POST['luz'])){
   $tipo = $_POST['tipo'];
   $precio = $_POST['precio'];
   $habitaciones = $_POST['habitaciones'];
   $banos = $_POST['banos'];
   $barrio = $_POST['barrio'];
   $direccion = $_POST['direccion'];
   $wifi = $_POST['wifi'];
   $aire_ac = $_POST['aire_ac'];
   $gas = $_POST['gas'];
   $agua = $_POST['agua'];
   $luz = $_POST['luz'];
   $idPropiedad= $_POST['idPropiedad'];
   $idServicio= $_POST['idServicio'];

   $editarPropiedad = editarPropiedad($tipo, $precio, $habitaciones, $barrio, $direccion, $banos, $wifi, $aire_ac, $gas, $agua, $luz, $idPropiedad, $idServicio);
   }
?>