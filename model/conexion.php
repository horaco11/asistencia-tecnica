<?php
$contrasena = "root";
$usuario = "root";
$nombre_bd = "asistencia_tecnica_db";

try {
    $bd = new PDO(
        'mysql:host=localhost;
dbname=' . $nombre_bd,
        $usuario,
        $contrasena,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")


    );
} catch (Exception $e) {

    echo "Problema con la conexion " . $e->getMessage();
}
