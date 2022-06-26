<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("SELECT * from trabajos where estado=1;");
$trabajo = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($trabajo);


?>

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- inicio alertas -->
            <?php
            if (isset($_GET["mensaje"]) and $_GET["mensaje"] == "falta") {
            ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>Atención!</strong> Debes completar todos los campos para continuar.
                </div>

            <?php
            }
            ?>


            <?php
            if (isset($_GET["mensaje"]) and $_GET["mensaje"] == "registrado") {
            ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>INGRESADA.</strong> Orden de trabajo creada correctamente.
                </div>

            <?php
            }
            ?>

            <?php
            if (isset($_GET["mensaje"]) and $_GET["mensaje"] == "editado") {
            ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>MODIFICADA.</strong> Orden de trabajo editada correctamente.
                </div>

            <?php
            }
            ?>

            <?php
            if (isset($_GET["mensaje"]) and $_GET["mensaje"] == "error") {
            ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>ERROR.</strong> Se ha producido un error, intente nuevamente.
                </div>

            <?php
            }
            ?>

            <?php
            if (isset($_GET["mensaje"]) and $_GET["mensaje"] == "eliminado") {
            ?>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <strong>ELIMINADO.</strong> La orden fue dada de baja correctamente.
                </div>

            <?php
            }
            ?>

            <!-- fins alertas -->

            <div class="card">
                <div class="card-header">
                    Trabajos en curso
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre Completo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Fecha ingreso equipo</th>
                                <th scope="col">Descripcion del problema</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($trabajo as $dato) {
                            ?>

                                <tr>
                                    <td scope="row"><?php echo $dato->id ?></td>
                                    <td><?php echo $dato->nombreCompleto ?></td>
                                    <td><?php echo $dato->telefono ?></td>
                                    <td><?php echo $dato->fechaIngreso ?></td>
                                    <td><?php echo $dato->descProblema ?></td>
                                    <td><a class="text-success" href="editar.php?id=<?php echo $dato->id ?>"><i class="bi bi-pencil"></i></a></td>
                                    <td><a class="text-danger" href="eliminar.php?id=<?php echo $dato->id ?>"><i class="bi bi-trash"></i></a></td>
                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingreso de nuevo equipo
                </div>
                <form action="registrar.php" class="p-4" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" name="txtNombreCompleto" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="txtTelefono" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de ingreso</label>
                        <input type="date" class="form-control" name="dateFechaIngreso" autofocus>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripcion del problema</label>
                        <textarea type="text" class="form-control" name="txtDescripcionProblema" rows="2" style="justify-content:left;">

                        </textarea>
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn  btn-outline-dark btn-block" value="Ingresar">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>