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
                  <div class="box box-success box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Vehiculo</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <label>Seleccione Tipo de Vehiculo:</label>
                        <select name="tipo_vehiculoInvitado" id="tipo_vehiculoInvitado" onchange="mostrarTipoVehiculo(this.value)" class="form-control">
                          <option value="000">---SELECCIONE---</option>
                          <option value="Auto">Auto</option>
                          <option value="Moto">Moto</option>
                          <option value="Bicicleta">Bicicleta</option>
                        </select>
                      </div>

                      <div id="divBicicleta">
                        
                      </div>
                      <div id="divAutoMoto" class="form-group">
                        <div id="lectorCodigo" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <label>Muestre la Tarjeta de Identificacion del Vehiculo:</label>
                          <div id="barcode-scanner"></div>

                        </div>

                        <div id="datosVehiculoInvitado" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Placa:</label>
                            <input type="text" class="form-control" name="placaInvitado" id="placaInvitado" readonly="true">
                          </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Marca: </label>
                          <input type="text" class="form-control" name="marcaInvitado" id="marcaInvitado" readonly="true">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Modelo: </label>
                          <input type="text" class="form-control" name="modeloInvitado" id="modeloInvitado" readonly="true">
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Color: </label>
                          <input type="text" class="form-control" name="colorInvitado" id="colorInvitado" readonly="true">
                        </div>

                      </div>

                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>

        </div>
    </section>
    <!-- /.content -->
  </div>

<?php
require 'footer.php';
?>

<script type="text/javascript" src="../public/dist/js/quagga.js"></script>
<script type="text/javascript" src="../public/dist/js/quagga.min.js"></script>

<script type="text/javascript" src="scripts/administrarVehiculo.js"></script>