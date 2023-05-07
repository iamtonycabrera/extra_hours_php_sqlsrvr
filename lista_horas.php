<?php

include "includes/header.php";

// Configurar zona horaria
date_default_timezone_set("Europe/Madrid");

// Obtener los datos
$query = "SELECT * FROM registros";
$stmt = $conn->query($query);

$registros = $stmt->fetchAll(PDO::FETCH_OBJ);



?>

<div class="card-header">
  <div class="row">
    <div class="col-md-9">
      <h3 class="card-title">Lista de todos los registros horas extras</h3>
    </div>
    <div class="col-md-3">
      <button type="button" class="btn btn-primary btn-xl pull-right w-100" data-toggle="modal" data-target="#modal-ingresar-horas">
        <i class="fa fa-plus"></i> Ingresar nuevo registro
      </button>
    </div>
  </div>
</div>
<!-- /.card-header -->
<div class="card-body">
  <table id="tblRegistros" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Tipo</th>
        <th>Fecha</th>
        <th>Festivo</th>
        <th>Hora inicial</th>
        <th>Hora final</th>
        <th>Empleado</th>
        <th>Fecha creación</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach ($registros as $fila) : ?>
        <tr>
          <td><?php echo $fila->id ?></td>
          <td><?php echo $fila->tipo ?></td>
          <td><?php echo $fila->fecha ?></td>
          <td><?php echo $fila->festivo ?></td>
          <td><?php echo $fila->hora_inicial ?></td>
          <td><?php echo $fila->hora_final ?></td>
          <td><?php echo $fila->empleado_id ?></td>
          <td><?php echo $fila->fecha_creacion ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
<!-- /.card-body -->


<?php include "includes/footer.php" ?>

<!-- page script -->
<script>
  $(function() {
    $('#tblRegistros').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    //Date range picker
    $('#fecha').datetimepicker({
      format: 'YYYY-MM-DD HH:mm:ss'
    });

    //Hora Inicial
    $('#timepicker').datetimepicker({
      format: 'HH:mm',
      enabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
      stepping: 30
    })

    //Hora Final
    $('#timepicker2').datetimepicker({
      format: 'HH:mm',
      enabledHours: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
      stepping: 30
    })

    $('#buscar_dni').click(function() {
      // Si el boton ha sido clickeado obtengo el id del empleado
      var dni = $('#buscaDni').val();

      if (dni == null || dni == "") {
        $('#mensajes').html("Error, campo vacío, ingrese un dni");
        $('#nombre').val("");
        $('#idEmpleado').val("");
        return false;
      }

      // Enviar con Ajax
      $.ajax({
        // La url del archivo php
        type: "GET",
        url: "http://localhost/extra_hours_php_sqlserver/buscar.php",
        data: {
          dni: dni
        },
        success: function(returnData) {
          // console.log(returnData);
          $('#nombre').val("");
          $('#idEmpleado').val("");

          // Parsear el json
          var results = JSON.parse(returnData);

          $.each(results, function(key, value) {
            if (value == "" || value == null) {
              $('#nombre').val("");
              $('#idEmpleado').val("");
              $('#mensajes').html("No existe empleado con este dni");
            } else {
              $('#nombre').val(value.nombre + " " + value.apellido);
              $('#idEmpleado').val(value.id);
              $('#mensajes').html("");
            }
          });
        }
      })
    })

  });
</script>