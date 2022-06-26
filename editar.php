<?php include 'template/header.php' ?>

<?php 
if(!isset($_GET['id'])){
    header('Location: index.php?mensaje=error');
    exit();
}

include_once 'model/conexion.php';
$id = $_GET['id'];

$sentencia = $bd->prepare("SELECT * FROM trabajos WHERE id=?;");
$sentencia->execute([$id]);
$trabajo = $sentencia->fetch(PDO::FETCH_OBJ);
//print_r($trabajo);





?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
        <div class="card">
                <div class="card-header">
                    Modificar datos de la orden
                </div>
                <form action="editarProceso.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" name="txtNombreCompleto" value="<?php echo $trabajo->nombreCompleto; ?>" autofocus >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="txtTelefono" value="<?php echo $trabajo->telefono; ?>" autofocus >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de ingreso</label>
                        <input type="date" class="form-control" name="dateFechaIngreso" value="<?php echo $trabajo->fechaIngreso; ?>" autofocus >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion del problema</label>
                        <textarea type="text" class="form-control" name="txtDescripcionProblema" rows="2";" >
                        <?php echo $trabajo->descProblema; ?>
                        </textarea>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $trabajo->id; ?>">
                        <input type="submit" class="btn  btn-outline-dark btn-block" value="Modificar">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>