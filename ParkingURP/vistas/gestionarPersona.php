<?php 
require 'header.php';
?> 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Gestionar Conductor
        <small>Aqui podrá gestionar a un Conductor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Gestionar Conductor</li>
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
                <h1 class="box-title">Conductor <button id="btnNuevo" class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i>Agregar</button></h1>
                <div class="box-tools pull-right">
                </div>
              </div>

              <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div id="divPanels" class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Vehiculos Registrados</a></li>
              <li><a href="#tab_2" data-toggle="tab">Vehiculos No Registrados</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="panel-body table-responsive" id="listadoregistros">
                <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Tipo de Persona</th>
                    <th>Placa</th>
                    <th>Editar</th>
                    <th>Activar/Desactivar</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Tipo de Persona</th>
                    <th>Placa</th>
                    <th>Editar</th>
                    <th>Activar/Desactivar</th>
                  </tfoot>
                </table>
              </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="panel-body table-responsive" id="listadoregistrosSin">
                <table id="tbllistadoSin" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Tipo de Persona</th>
                    <th>Registrar</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Tipo de Persona</th>
                    <th>Registrar</th>
                  </tfoot>
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

              <div class="panel-body" id="formularioregistros">
                <form name="formulario" id="formulario" method="POST">

                <div class="col-md-12">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Conductor</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Tipo de Persona:</label>
                        <div class="">
                          <select id="id_tipo_persona" name="id_tipo_persona" onchange="queTipoPersona(this)" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                      </div>
                      <div id="selectCarrera" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Carrera:</label>
                        <div class="">
                          <select id="id_carrera" name="id_carrera" class="form-control selectpicker" data-live-search="true" required="true"></select>
                        </div>
                      </div>
                      <div id="divCodigo" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Codigo:</label>
                        <input type="hidden" name="id_persona" id="id_persona">
                        <input type="text" class="form-control" name="codigo" id="codigo" onblur="validarCod(this)" placeholder="Codigo" required>
                        <span id="spanCodigo"  class="help-block"><i id="iconErrorCodigo"></i></span>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="Nombre" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Apellido Paterno:</label>
                        <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" maxlength="50" placeholder="Apellido Paterno" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Apellido Materno:</label>
                        <input type="text" class="form-control" name="ape_materno" id="ape_materno" maxlength="50" placeholder="Apellido Materno" required>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Celular:</label>
                        <input type="number" class="form-control" name="celular" id="celular" maxlength="9" placeholder="Celular">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Correo:</label>
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>

                <div class="col-md-12">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Vehiculo</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Tipo Vehiculo:</label>
                        <div class="">
                          <select id="id_tipo_vehiculo" name="id_tipo_vehiculo" onchange="llenarMarcaVehiculo(this.value)" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Marca Vehiculo:</label>
                        <div class="">
                          <select id="id_marca_vehiculo" name="id_marca_vehiculo"  class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                      </div>

                      <div id="divPlaca" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Placa:</label>
                        <input type="hidden" name="id_vehiculo" id="id_vehiculo">
                        <input type="text" class="form-control" name="placa" id="placa" onblur="validaPlaca(this.value)" placeholder="Placa" required>
                        <span id="spanPlaca"  class="help-block"><i id="iconErrorPlaca"></i></span>
                      </div>
                      
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Modelo:</label>
                        <input type="text" class="form-control" name="modelo" id="modelo" maxlength="50" placeholder="Modelo" required>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Color:</label>
                        <div class="">
                          <select id="id_color" name="id_color" class="form-control selectpicker" data-live-search="true" required></select>
                        </div>
                      </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                  
                  <div class="form-group col-lg-12 col-md-12 col-sm-12
                  col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Registrar</button>

                    <button class="btn btn-primary" onclick="activemos()" id="btnActivar"><i class="fa fa-check"></i> Activar</button>
                    <button class="btn btn-danger" onclick="desactivemos()" id="btnDesactivar"><i class="fa fa-Close"></i> Desactivar</button>

                    <button class="btn btn-primary" onclick="registremosVehiculos()" id="btnRegistrarVehiculo"><i class="fa fa-save"></i> Registrar Vehiculo</button>

                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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

<script type="text/javascript" src="scripts/gestionarPersona.js"></script>