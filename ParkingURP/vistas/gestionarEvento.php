<?php 
require 'header.php';
?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestionar Evento
        <small>Aqui podrá gestionar a un evento</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestionar Evento</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h1 class="box-title">Agregar Evento<span style="display:inline-block; width: 10px;"></span><button id="btnNuevo" class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i></button></h1>
                <div class="box-tools pull-right">
                </div>
              </div>

              <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div id="divPanels" class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Eventos</a></li> 
            <!--  <li><a href="#tab_2" data-toggle="tab">Vehiculos No Registrados</a></li> -->
            </ul>
            <div class="tab-content">
            
              <div class="tab-pane active" id="tab_1">
                <div class="panel-body table-responsive" id="listados">
                <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">

                  <thead>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Accion</th>                  
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              </div>
                    <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>

              <div class="panel-body" class="visible">
                <form name="formulario" id="formulario" method="POST">

                <div class="col-md-12">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Evento</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->               
                    <div class="box-body" style="">                                    
                       <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre:</label>
                        <input type="hidden" id="id_evento" name="id_evento">
                        <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Descripcion:</label>
                        <input type="text" class="form-control" name="decripcion" id="decripcion" maxlength="50" placeholder="Descripcion" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Fecha Inicio:</label>
                        <input type="date" class="form-control" name="fecInicio" id="fecInicio" placeholder="Fecha Inicio" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Fecha Fin:</label>
                        <input type="date" class="form-control" name="fecFin" id="fecFin" maxlength="50" placeholder="Fecha Fin" required>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Areas</label>
                        <select class="form-control selectpicker" id="id_area" multiple="multiple" name="id_area[]" data-placeholder="Seleccione las Areas" required="true">
                        </select>
                      </div>

                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                  
                  <div class="form-group col-lg-12 col-md-12 col-sm-12
                  col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Registrar</button>
                    <button id="btnIniciarEvento" class="btn btn-primary" onclick="inicioDeEvento()" type="button"><i class="fa fa-check"></i> Iniciar</button>
                    <button id="btnFinalizarEvento" class="btn btn-danger" onclick="finDeEvento()" type="button"><i class="fa fa-close"></i> Finalizar</button>
                    <button class="btn btn-default" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  
<?php
require 'footer.php';
?>

<script type="text/javascript" src="scripts/gestionarEvento.js"></script>

