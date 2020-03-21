<?php

try {
    //code...
    $usuario = 'root';
    $contrasena = '';
    $link = 'mysql:host=localhost;dbname=cursophp';

    $conexion = new PDO($link,$usuario,$contrasena);

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
