<?php

include "includes/header.php";

// Insertamos datos
if (isset($_POST['crearEmpleado'])) {
    // Obtener los valores
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $esAdmin = $_POST['es_admin'];

    $query = "SELECT * FROM empleados WHERE dni = :dni";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
    $stmt->execute();

    $registroDni = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($registroDni) {
        $error = "Ya existe un empleado con este DNI";
    } else {
        // Si entra por aqui es porque e dni no existe y se puede crear el registro
        $query = "INSERT INTO empleados(dni, email, nombre, apellido, es_admin)VALUES(:dni, :email, :nombre, :apellido, :es_admin)";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":dni", $dni, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $apellido, PDO::PARAM_STR);
        $stmt->bindParam(":es_admin", $esAdmin, PDO::PARAM_INT);

        $resultado = $stmt->execute();

        if ($resultado) {
            $mensaje = "Empleado creado correctamente";
        } else {
            $error = "Error, no se pudo crear el empleado";
        }
    }
}

?>


<div class="row">
    <div class="col-sm-12">
        <?php if (isset($mensaje)) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $mensaje ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $error ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif ?>
    </div>
</div>

<div class="card-header">
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title">Registrar empleado</h3>
        </div>

    </div>
</div>
<!-- /.card-header -->
<div class="card-body">
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="dni">DNI:</label>
            <input type="text" class="form-control" name="dni" placeholder="Ingresa el DNI">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">
        </div>
        <div class="form-group">
            <label for="nombre">Apellidos:</label>
            <input type="text" class="form-control" name="apellido" placeholder="Ingresa el/los apellidos">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="esAdmin">Es Administrador</label>
            <select class="form-control" name="es_admin">
                <option value="">--Selecciona un valor--</option>
                <option value="1">Si</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit" name="crearEmpleado" class="btn btn-primary w-100"><i class="fas fa-user"></i> Crear nuevo empleado</button>
    </form>
</div>
<!-- /.card-body -->
<?php include "includes/footer.php" ?>