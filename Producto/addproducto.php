<?php

include_once '../Conexion/conexion.php';

if ($_POST) {
    # code...
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];


    $consulta_sql = 'INSERT INTO productos(nombre,descripcion) values (?,?)';
    $sentencia = $conexion->prepare($consulta_sql);
    $sentencia->execute(array($nombre, $descripcion));

    $conexion =null;
    $sentencia=null;
    
    // $respuesta = '<div class="alert alert-primary" role="alert"> Producto registrado correctamente </div>';
    // json_encode($respuesta);
    header('Location: ../index.php');
}
