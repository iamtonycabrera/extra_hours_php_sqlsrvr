<?php include "includes/header.php" ?>


              <div class="card-header">               
                <div class="row">
                  <div class="col-md-9">
                    <h3 class="card-title">Lista de todos los registros usuarios</h3>
                  </div>
                
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label for="cedula"># de Cédula:</label>
                        <input type="number" class="form-control" name="cedula" placeholder="Ingresa el # de cédula">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre">
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
                    <button type="submit" name="crearEmpleado" class="btn btn-primary w-100"><i class="fas fa-user"></i> Crear Nuevo Empleado</button>
                    </form>
              </div>
              <!-- /.card-body -->
<?php include "includes/footer.php" ?>
            