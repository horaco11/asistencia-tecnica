<?php
//print_r($_POST);
if (empty($_POST["oculto"]) || empty($_POST["txtNombreCompleto"]) 
|| empty($_POST["txtTelefono"]) || empty($_POST["dateFechaIngreso"]) 
|| empty($_POST["txtDescripcionProblema"])){
    header('Location: index.php?mensaje=falta');
    exit();
}
include_once 'model/conexion.php';
$nombreCompleto = $_POST["txtNombreCompleto"];
$telefono = $_POST["txtTelefono"];
$fechaIngreso = $_POST["dateFechaIngreso"];
$descripcionProblema = $_POST["txtDescripcionProblema"];
$estado = 1;

$sentencia = $bd -> prepare("INSERT INTO trabajos (nombreCompleto, telefono, fechaIngreso, descProblema, estado) VALUES (?,?,?,?,?);");
$resultado = $sentencia->execute([$nombreCompleto,$telefono,$fechaIngreso,$descripcionProblema,$estado]);

if ($resultado === TRUE) {
    header('Location: index.php?mensaje=registrado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}

?>