<?php 
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){
  //No se ha logeado de manera correcta
  header("Location: login.html");
}else{

require 'header.php';

if($_SESSION['perfil'] == "Supervisor"){
?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aprobar Permanencia
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Aprobar Permanencia</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
          <div class="col-md-12"><!--cubre toda la pantalla-->
            <div class="box">
              <div class="box-header with-border">
                <h1 class="box-title">Solicitud<span style="display:inline-block; width: 10px;"></span></h1>
                <div class="box-tools pull-right">
                </div>
              </div>

              <div class="row">
        <div class="col-md-12">

          <div class="panel-body table-responsive" id="listadoregistros">
                <table id="tblSolicitud" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Codigo</th>
                    <th>Placa</th>
                    <th>Estado</th>
                    <th>Detalle</th>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
      
              </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
            </div>
          </div>
        </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 <div class="modal fade" id="verDatos">
          <div class="modal-dialog">
            <div class="modal-content">

              <form name="frmAprobPermanencia" id="frmAprobPermanencia" method="POST">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Aprobar Permanencia</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" readonly="true">
                    <input type="hidden" name="id_control" id="id_control">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Placa: </label>
                    <input type="text" class="form-control" name="placa" id="placa" readonly="true">
                  
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Apellido Paterno: </label>
                    <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Apellido Materno: </label>
                    <input type="text" class="form-control" name="ape_materno" id="ape_materno" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Tipo Persona: </label>
                    <input type="text" class="form-control" name="tipo_persona" id="tipo_persona" readonly="true">
                  </div>
                   <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Color: </label>
                    <input type="text" class="form-control" name="color" id="color" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Marca: </label>
                    <input type="text" class="form-control" name="marca" id="marca" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Modelo: </label>
                    <input type="text" class="form-control" name="modelo" id="modelo" readonly="true">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Tipo de Vehìculo: </label>
                    <input type="text" class="form-control" name="tipo_vehiculo" id="tipo_vehiculo" readonly="true">
                  </div>
                   <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Motivo: </label>
                    <textarea class="form-control" rows="3" id="motivo" style="margin: 0px 30px 0px 0px; height: 100px; width: 100%;" readonly="true"></textarea>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Respuesta: </label>
                    <textarea class="form-control" rows="3" id="respuesta" style="margin: 0px 30px 0px 0px; height: 100px; width: 100%;"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-primary" onclick="aprobarEstadoSolicitud()" id="btnActivar"><i class="fa fa-check"></i> Aprobar</button>
                  <button type="button" class="btn btn-danger" onclick="desaprobarEstadoSolicitud()" id="btnDesactivar"><i class="fa fa-close"></i> Desaprobar</button>
                </div>               
              </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


<?php
}else{
  require 'home.php';
}
require 'footer.php';
?>

<script type="text/javascript" src="scripts/aprobarPermanencia.js"></script>

<?php 

}

//Liberar el espacio del buffer
ob_end_flush();
?>