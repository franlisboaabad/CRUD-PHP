<?php
include_once './Conexion/conexion.php';
$consulta_sql = 'SELECT * FROM productos';
$sentencia_sql = $conexion->prepare($consulta_sql);
$sentencia_sql->execute();
$productos = $sentencia_sql->fetchAll();



?>


<?php include_once './Layout/header.php' ?>

    <div class="container my-5">
        <h2>Mis datos php</h2>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="Producto/addproducto.php">
                    <div class="form-group">
                        <label for="nombre">Nombre de producto</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion de producto</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <button type="submit" class="btn btn-info">Agregar Producto</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Mis productos</h2>
                <ul class="list-group">
                    <?php foreach ($productos as $producto) : ?>
                        <li class="list-group-item"><?= $producto['nombre'] ?> - <?= $producto['descripcion'] ?>

                            <a href="Producto/deleteproducto.php?id=<?= $producto['id'] ?>" class="btn btn-danger float-right">delete</a>
                            <a href="Producto/editproducto.php?id=<?= $producto['id'] ?>" class="btn btn-info float-right mr-2">edit</a>
                        </li>

                    <?php endforeach  ?>
                </ul>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>