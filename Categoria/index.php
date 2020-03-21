<?php include_once '../Layout/header.php' ?>
<?php

    include_once '../Conexion/conexion.php';

    $consulta_sql = 'SELECT * FROM categorias';
    $sentencia_sql = $conexion->prepare($consulta_sql);
    $sentencia_sql->execute();
    $categorias = $sentencia_sql->fetchAll();
    
?>

<div class="container my-5">
    <h2>Mis categorias</h2>
    <hr>

    <div class="row">
        <div class="col-md-7">
            <form method="POST" action="addcategoria.php">
                <div class="form-group">
                    <label for="nombre">Nombre categoria</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Nombre categoria</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                </div>

                <button type="submit" class="btn btn-info">Registrar Categoria</button>
            </form>
        </div>

        <div class="col-md-5">
            <h2>Lista de categorias</h2>
            <ul class="list-group">
            <?php if($categorias != null): ?>
                <?php foreach($categorias as $categoria): ?>
                    <li class="list-group-item">
                        <?=$categoria['nombre']?> - <?= utf8_encode($categoria['descripcion']) ?>
                        <a href="deletecategoria.php?id=<?=$categoria['id']?>" class="btn btn-danger float-right">delete</a>
                        <a href="editcategoria.php?id=<?=$categoria['id']?>" class="btn btn-info float-right mr-2">edit</a>
                    </li>
                <?php endforeach ?>
            <?php endif?>
            </ul>
        </div>
    </div>

</div>