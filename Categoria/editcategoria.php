<?php

include_once '../Conexion/conexion.php';

if ($_GET['id']) {
    # code...

    $id = $_GET['id'];
    $consulta_buscar = 'SELECT * FROM categorias WHERE id=?';
    $sentencia_sql_buscar = $conexion->prepare($consulta_buscar);
    $sentencia_sql_buscar->execute(array($id));
    $categoria = $sentencia_sql_buscar->fetch();
}

if ($_POST) {
    # code...
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    // var_dump(array($id,$nombre,$descripcion));
    
    $consulta_editar = 'UPDATE categorias SET nombre=?,descripcion=? WHERE id=?';
    $sentencia_editar = $conexion->prepare($consulta_editar);
    $sentencia_editar->execute(array($nombre,$descripcion,$id));

    $sentencia_editar = null;
    $conexion = null;

    header('Location: index.php');
}
?>

<?php include_once '../Layout/header.php'; ?>

<div class="container my-5">
    <h2>Editar categoria N° : <?=$categoria['id'] ?> </h2> <hr>

    <div class="row">
        <div class="col-md-7">
            <form method="POST" action="editcategoria.php">
                <div class="form-group">
                    <input type="hidden" value="<?=$categoria['id']?>" name="id" id="id">
                    <label for="nombre">Nombre categoria</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required value="<?=$categoria['nombre']?>">
                </div>
                <div class="form-group">
                    <label for="descripcion">Nombre categoria</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required value="<?=utf8_encode( $categoria['descripcion'] ) ?>" >
                </div>

                <button type="submit" class="btn btn-info">Actualizar categoria</button>
            </form>
        </div>

    </div>
</div>