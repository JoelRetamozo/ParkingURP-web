<?php

ob_start();
session_start();

if(!isset($_SESSION["nombre"])){
  //No se ha logeado de manera correcta
  header("Location: login.html");
}else{
require 'header.php';
if($_SESSION['perfil'] == "Vigilante"){
?>

<div id="controlarIngresoDivGeneral" class="content-wrapper">
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
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" onclick="ClearInvitado()">Conductores URP</a></li>
              <li><a href="#tab_2" data-toggle="tab" onclick="ClearFormBusqueda()">Invitados</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

            <div class="box">

              <div class="panel-body">

                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Ingrese el codigo del Conductor:</label>
                    <input type="hidden" id="tipoVehiculoNuevoRegistro" value="<?php if(isset($_POST["tipo_vehiculo"])){echo $_POST['tipo_vehiculo'];}else{echo "";}?>">
                    <input type="hidden" id="placaNuevoRegistro" value="<?php if(isset($_POST["placa"])){echo $_POST['placa'];}else{echo "";}?>">
                    <input type="hidden" id="marcaNuevoRegistro" value="<?php if(isset($_POST["marca"])){echo $_POST['marca'];}else{echo "";}?>">
                    <input type="hidden" id="colorNuevoRegistro" value="<?php if(isset($_POST["color"])){echo $_POST['color'];}else{echo "";}?>">
                    <input type="number" class="form-control" name="codigo" id="codigo" value="<?php if(isset($_POST["codigo"])){echo $_POST['codigo'];}else{echo "";}?>" placeholder="Codigo" required="true">
                    <span id="spanCodigoBusqueda" class="help-block"><i id="iconErrorPlaca" class="fa fa-times-circle-o"></i></span>

                    <br>
                    <button class="btn btn-primary" id="btnBuscar" onclick="validarConductor($('#codigo').val());"><i class="fa  fa-search"></i> Buscar</button>
                    
                </div>
              </div>

              <div id="datosdelConductor" class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Conductor</h3>
                </div>
                <div class="box-body">

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Tipo de Conductor:</label>
                        <input type="text" class="form-control" name="tipo_persona" id="tipo_persona" disabled="false" readonly="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" disabled="false" readonly="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Apellido Paterno:</label>
                        <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" disabled="false" readonly="true">
                      </div>

                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Apellido Materno:</label>
                        <input type="text" class="form-control" name="ape_materno" id="ape_materno" disabled="false" readonly="true">
                      </div>

                  <div id="divCarrera" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <label>Carrera:</label>
                        <input type="text" class="form-control" name="carrera" id="carrera" disabled="false" readonly="true">
                      </div>

                    <div class="col-md-12">
                      <!-- Custom Tabs (Pulled to the right) -->
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                          <li class="active"><a href="#tab_1-1" data-toggle="tab" onclick="tabBicicletaMarcado(false)"><i class="fa fa-car"></i></a></li>
                          <li><a href="#tab_2-2" data-toggle="tab" onclick="tabBicicletaMarcado(false)"><i class="fa fa-motorcycle"></i></a></li>
                          <li><a href="#tab_3-2" data-toggle="tab" onclick="tabBicicletaMarcado(true)"><i class="fa fa-bicycle"></i></a></li>
                          <li class="pull-left header"><i class="fa fa-bus"></i> Vehiculo</li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1-1">

                            <div class="row">
                              <div class="col-xs-12">
                                <div class="box">

                                  <div class="box-header">
                                    <h3 class="box-title"><form action="administrarVehiculo.php" method="POST"><input type="hidden" name="codigoAEnviar" id="codigoAEnviarAuto"><input type="hidden" name="tipoVehiculoAEnviar" value="Auto">Autos <button class="btn btn-success" id="btnAgregarAuto" type="submit"><i class="fa fa-plus-circle"></i> Agregar</button></form></h3>

                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body table-responsive no-padding">
                                    <table id="tblAutos" class="table table-striped table-bordered table-condensed table-hover">
                                      <thead>
                                        <th>Placa</th>
                                        <th>Eliminar</th>
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
                                    <h3 class="box-title"><form action="administrarVehiculo.php" method="POST"><input type="hidden" name="codigoAEnviar" id="codigoAEnviarMoto"><input type="hidden" name="tipoVehiculoAEnviar" value="Moto">Motos <button class="btn btn-success" id="btnAgregarMoto" type="submit"><i class="fa fa-plus-circle"></i> Agregar</button></form></h3>

                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body table-responsive no-padding">
                                    <table id="tblMotos" class="table table-striped table-bordered table-condensed table-hover">
                                      <thead>
                                        <th>Placa</th>
                                        <th>Eliminar</th>
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
                                    <h3 class="box-title"><form action="administrarVehiculo.php" method="POST"><input type="hidden" name="codigoAEnviar" id="codigoAEnviarBici"><input type="hidden" name="tipoVehiculoAEnviar" value="Bicicleta">Bicicletas <button class="btn btn-success" id="btnAgregarBicicleta" type="submit"><i class="fa fa-plus-circle"></i> Agregar</button></form></h3>
                                  </div>
                                  <!-- /.box-header -->
                                  <input type="hidden" id="estaPrendidoScanner">
                                  <label>Muestre el codigo de Identificacion otorgado a la Bicicleta:</label>
                                  <div id="divScannerControlBici" class="box-body"></div>
                                  
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
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">

                <form action="administrarVehiculo.php" method="POST">

                  <div class="box box-success box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Invitado</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <input type="hidden" name="tipoVehiculoAEnviar" value="000">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>DNI:</label>
                          <input type="text" class="form-control" name="codigoInvitado" id="codigoInvitado" placeholder="Ingrese DNI" value="<?php if(isset($_POST["DNIInvitado"])){echo $_POST['DNIInvitado'];}else{echo "";}?>" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Nombre:</label>
                          <input type="text" class="form-control" name="nombreInvitado" id="nombreInvitado" placeholder="Ingrese Nombre" value="<?php if(isset($_POST["nombreInvitado"])){echo $_POST['nombreInvitado'];}else{echo "";}?>" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Apellido Paterno:</label>
                          <input type="text" class="form-control" name="ape_paternoInvitado" id="ape_paternoInvitado" placeholder="Ingrese Apellido Paterno" value="<?php if(isset($_POST["apePInvitado"])){echo $_POST['apePInvitado'];}else{echo "";}?>" required>
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Apellido Materno:</label>
                          <input type="text" class="form-control" name="ape_maternoInvitado" id="ape_maternoInvitado" placeholder="Ingrese Apellido Materno" value="<?php if(isset($_POST["apeMInvitado"])){echo $_POST['apeMInvitado'];}else{echo "";}?>" required>
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" id="btnRegistrar" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Siguiente</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </form>

              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
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
                    <input type="hidden" name="codigo" id="codigo_control">
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

<div class="modal fade" id="modal-bici">
          <div class="modal-dialog">
            <div class="modal-content">

              <form name="frmIngresoBici" id="frmIngresoBici" method="POST">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Registrar Ingreso</h4>
                </div>
                <div class="modal-body">

                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Tipo Vehiculo: </label>
                    <div class="info-box">
                      <span class="info-box-icon bg-green"><i class="fa fa-bicycle"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-number">Bicicleta</span>
                      </div>
                      <!-- /.info-box-content -->
                    </div>
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Marca: </label>
                    <input type="hidden" name="codigo" id="codigo_Bici_control">
                    <input type="hidden" name="placa" id="placa_Bici_control">
                    <input type="text" class="form-control" name="marca" id="marca_modal_bici" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Color: </label>
                    <input type="text" class="form-control" name="color" id="color_modal_bici" readonly="true">
                  </div>
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
}else{
  require 'home.php';
}
require 'footer.php';

?>
<style type="text/css">
  #barcode-scanner canvas.drawingBuffer, video.drawingBuffer{
      display: none;
    }

    #barcode-scanner video, #barcode-scanner canvas{
      width: 100%;
      height: auto;
    }
</style>

<script type="text/javascript" src="../public/dist/js/quagga.js"></script>
<script type="text/javascript" src="../public/dist/js/quagga.min.js"></script>

<script type="text/javascript" src="scripts/controlarIngreso.js"></script>

<?php 

}

//Liberar el espacio del buffer
ob_end_flush();
?>