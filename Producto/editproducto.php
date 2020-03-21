<?php

include_once '../Conexion/conexion.php';

if ($_GET) {
    # code...
    //obtengo mi producto via el metodo get - paso los datos a los input
    $id = $_GET['id'];
    $consulta_sql = 'SELECT * FROM productos WHERE id=?';
    $sentencia_sql = $conexion->prepare($consulta_sql);
    $sentencia_sql->execute(array($id));
    $producto = $sentencia_sql->fetch();
}

if ($_POST) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion =$_POST['descripcion'];

    $consulta_sql_editar = 'UPDATE productos  SET nombre=?,descripcion=? WHERE id=?';
    $sentencia_sql_editar = $conexion->prepare($consulta_sql_editar);
    $sentencia_sql_editar->execute(array($nombre,$descripcion,$id));

    $conexion =null;
    $sentencia_sql_editar=null;
    header('Location: ../index.php');
}


?>

    <?php include_once '../Layout/header.php' ?>

    <div class="container my-5">
        <h2>Editar Producto N° : <?= $id ?> </h2>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="editproducto.php">
                    <div class="form-group">
                        <label for="nombre">Nombre de producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required value="<?= $producto['nombre'] ?>">
                        <input type="hidden" name="id" id="id" value="<?=$producto['id']?>">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion de producto</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"  required value="<?= $producto['descripcion'] ?>">
                    </div>
                    <button type="submit" class="btn btn-info">Editar Producto</button>
                </form>
            </div>

        </div>

    </div>
