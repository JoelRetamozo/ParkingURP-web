<?php
require 'header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Controlar Ingreso
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Controlar Ingreso</li>
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

              <div class="panel-body">

                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Ingrese el codigo del Conductor:</label>
                    <input type="number" class="form-control" name="codigo" id="codigo" placeholder="Codigo" required="true">

                    <br>
                    <button class="btn btn-primary" id="btnBuscar" onclick="buscarConductor();"><i class="fa  fa-search"></i> Buscar</button>
                    
                </div>
              </div>

              <div id="datosdelConductor" class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Conductor</h3>
                </div>
                <div class="box-body">

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Tipo de Conductor:</label>
                        <input type="text" class="form-control" name="tipo_persona" id="tipo_persona" disabled="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" disabled="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Apellido Paterno:</label>
                        <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" disabled="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Apellido Materno:</label>
                        <input type="text" class="form-control" name="ape_materno" id="ape_materno" disabled="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Carrera:</label>
                        <input type="text" class="form-control" name="carrera" id="carrera" disabled="true">
                      </div>

                    <div class="col-md-12">
                      <!-- Custom Tabs (Pulled to the right) -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                          <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="fa fa-car"></i></a></li>
                          <li><a href="#tab_2-2" data-toggle="tab"><i class="fa fa-motorcycle"></i></a></li>
                          <li><a href="#tab_3-2" data-toggle="tab"><i class="fa fa-bicycle"></i></a></li>
                          <li class="pull-left header"><i class="fa fa-bus"></i> Vehiculos</li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1-1">

                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box">
                                  <div class="box-header">
                                    <h3 class="box-title">Autos</h3>

                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body table-responsive no-padding">
                                    <table id="tblAutos" class="table table-striped table-bordered table-condensed table-hover">
                                      <thead>
                                        <th>Placa</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div>
                            </div>

                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_2-2">
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box">
                                  <div class="box-header">
                                    <h3 class="box-title">Motos</h3>

                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body table-responsive no-padding">
                                    <table id="tblMotos" class="table table-striped table-bordered table-condensed table-hover">
                                      <thead>
                                        <th>Placa</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div>
                            </div>
                          </div>
                          <!-- /.tab-pane -->
                          <div class="tab-pane" id="tab_3-2">
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box">
                                  <div class="box-header">
                                    <h3 class="box-title">Bicicletas</h3>

                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body table-responsive no-padding">
                                    <table id="tblBicicletas" class="table table-striped table-bordered table-condensed table-hover">
                                      <thead>
                                        <th>Placa</th>
                                        <th>Estado</th>
                                        <th>Accion</th>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div>
                            </div>
                          </div>
                          <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                      </div>
                      <!-- nav-tabs-custom -->
                    </div>

                </div>
                <!-- /.box-body -->
              </div>

            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">

              <form name="frmIngreso" id="frmIngreso" method="POST">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Registrar Ingreso</h4>
                </div>
                <div class="modal-body">

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Tipo Vehiculo: </label>
                    <div class="info-box">
                      <span class="info-box-icon bg-green"><i id="icono_tipo_vehiculo" class="fa"></i></span>

                      <div class="info-box-content">
                        <span id="tipo_vehiculo" class="info-box-number"></span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Placa: </label>
                    <input type="hidden" name="id_persona" id="id_persona">
                    <input type="text" class="form-control" name="placa" id="placa" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Marca: </label>
                    <input type="text" class="form-control" name="marca" id="marca" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Modelo: </label>
                    <input type="text" class="form-control" name="modelo" id="modelo" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Color: </label>
                    <input type="text" class="form-control" name="color" id="color" readonly="true">
                  </div>
                </div>
                <div class="checkbox col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <label>
                    <input id="checkInvitado" onchange="mostrarAddInvitados(this)" type="checkbox"> Añadir Invitados
                  </label>
                </div>

                <div id="masInvitado" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="ClearRegistroControl()">Cancelar</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Registrar</button>
                </div>               
              </form>

            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

<?php
require 'footer.php';
?>

<script type="text/javascript" src="scripts/controlarIngreso.js"></script>