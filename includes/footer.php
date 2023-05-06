</div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Master en PHP Moderno 7 y 8
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://render2web.com">App Horas Extras</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!--MODALS INSERTAR HORAS-->
<div class="modal fade" id="modal-ingresar-horas">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title"><strong>Nuevo registro de horas extras</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">				
       
          <div id="errores" style="color: red;"></div>  

          <!-- form start -->
            <div class="box-body">

              <div class="row">
                <div class="col-xs-6">
                    <div class="form-group">
                      <label for="centrocostos">Buscar empleado:</label>
                      <input type="text" class="form-control" id="buscaCedula" placeholder="Ingresa un # de cédula"> 

                      <!-- En este div se muestran los mensajes de rror si los hubiera-->
									    <div id="mensajes" style="color: red;"></div> 	         
                 </div>
              </div>

                 <div class="col-xs-6" style="margin-top:32px;">
                  <div class="form-group">					                
                    <!-- Our search button -->
                    <!-- Our search button -->
              <!--<input type="button" id="buscar_cedula" value="Search">	-->
              &nbsp;
              <button id="buscar_cedula" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>			   
                 </div>					                        
             </div>		          
          </div>		              		
              
          
          <form role="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
              <div class="row">
               <div class="col-sm-5">
                <div class="form-group">
                    <label for="nombre">Id empleado: </label>
                    <input type="text" class="form-control" name="idEmpleado" id="idEmpleado" readonly>                   
                  </div>
              </div>

              <div class="col-sm-5">
                <div class="form-group">
                    <label for="centrocostos">Nombre de empleado: </label>
                    <input type="text" class="form-control" id="nombre" readonly>                   
                  </div>
              </div>
           </div>				

              <!-- Date -->
              <div class="form-group">
                <label>Fecha:</label>
                  <div class="input-group date" id="fecha" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#fecha" name="fecha">
                      <div class="input-group-append" data-target="#fecha" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
            <!-- /.form group -->
      

      <div class="clearfix"></div>

      <div class="row">
            <div class="col-sm-10 offset-1">
               
            <div class="form-group">
                <label for="festivo">Festivo:</label>
                <select class="form-control" name="festivo" id="festivo">
                  <option value="">--Seleccionar un valor--</option>
                  <option value="Domingo">Domingo</option>
                  <option value="Festivo">Festivo</option>                 
                </select>
              </div>
            </div>
        </div>

         
           
              
              <div class="row">
              
                <div class="col-sm-6">
                  
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Hora Inicial:</label>
  
                      <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" name="horaInicial">
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div>

                </div>

                <div class="col-sm-6">
                 
                  <div class="form-group">
                    <label>Hora Final:</label>

                    <div class="input-group date" id="timepicker2" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input horasReg" data-target="#timepicker2" name="horaFinal">
                      <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>
                    <!-- /.input group -->
                  </div>	                  

                </div>

              </div>				              			                
          
              </div>            

            					
            <div class="box-footer">
               <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal"><i class="far fa-window-close"></i> Cerrar</button>

                <button type="submit" name="registrarHoras" id="registrarHoras" class="btn btn-primary"><i class="fas fa-cog"></i> Registrar</button>              
            </div>
          </form>
            <!-- /.input group -->

          </div>
         
      </div>
      
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
</div>




<!-- REQUIRED SCRIPTS -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>

<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>
</html>
