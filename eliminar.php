<?php include 'template/header.php' ?>

<?php
if(!isset($_GET['id'])){
    header('Location: index.php?mensaje=error');
    exit();
}
include_once 'model/conexion.php';
$id = $_GET['id'];
$sentencia = $bd->prepare("UPDATE trabajos SET estado = 0 WHERE id = ?;");
$resultado = $sentencia->execute([$id]);


if ($resultado === true) {
    header('Location: index.php?mensaje=eliminado');
} else {
    header('Location: index.php?mensaje=error');
    exit();
}
?>

<?php include 'template/footer.php' ?>