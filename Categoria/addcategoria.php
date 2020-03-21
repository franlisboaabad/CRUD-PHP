<?php
include_once '../Conexion/conexion.php';

if ($_POST) {
    # code...
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    var_dump(array($nombre,$descripcion));

    $consulta_agregar = 'INSERT INTO  categorias(nombre,descripcion) values (?,?)';
    $sentencia_agregar = $conexion->prepare($consulta_agregar);
    $sentencia_agregar->execute(array($nombre, $descripcion));

    $sentencia_agregar = null;
    $conexion = null;

    header('Location: index.php');
}
