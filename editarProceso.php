<?php
//print_r($_POST);
if(!isset($_POST['id'])){
header('Location: index.php?mensaje=error');
}

include_once 'model/conexion.php';
$id = $_POST['id'];
$nombreCompleto = $_POST['txtNombreCompleto'];
$telefono = $_POST['txtTelefono'];
$fechaIngreso = $_POST['dateFechaIngreso'];
$descripcionProblema = $_POST['txtDescripcionProblema'];

$sentencia = $bd->prepare("UPDATE trabajos SET nombreCompleto = ?, telefono = ?, fechaIngreso = ?, descProblema = ? WHERE id=?;  ");
$resultado = $sentencia->execute([$nombreCompleto, $telefono, $fechaIngreso, $descripcionProblema, $id]);

if ($resultado === true) {
    header('Location: index.php?mensaje=editado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}

?>