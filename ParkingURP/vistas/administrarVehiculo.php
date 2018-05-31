<?php
require 'header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Vehiculo
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="controlarIngreso.php"><i class="fa fa-dashboard"></i> Controlar Ingreso</a></li>
        <li class="active">Administrar Vehiculo</li>
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

                      <form class="col-md-12" action="controlarIngreso.php" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                          <label>Seleccione Tipo de Vehiculo:</label>
                          <input type="hidden" name="DNIInvitado" value="<?php if(isset($_POST["codigoInvitado"])){echo $_POST['codigoInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="nombreInvitado" value="<?php if(isset($_POST["nombreInvitado"])){echo $_POST['nombreInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="apePInvitado" value="<?php if(isset($_POST["ape_paternoInvitado"])){echo $_POST['ape_paternoInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="apeMInvitado" value="<?php if(isset($_POST["ape_maternoInvitado"])){echo $_POST['ape_maternoInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="codigo" id="codigo" value="<?php if(isset($_POST["codigoAEnviar"])){echo $_POST['codigoAEnviar'];}else{echo "";}?>">
                          <input type="hidden" name="tipo_vehiculo" id="tipoVehiculoEnviado" value="<?php echo $_POST['tipoVehiculoAEnviar']; ?>">
                          <input type="hidden" value="<?php echo $_POST['tipoVehiculoAEnviar']; ?>">
                          <select id="tipo_vehiculo" onchange="mostrarTipoVehiculo(this.value)" class="form-control">
                            <option value="000">---SELECCIONE---</option>
                            <option value="Auto">Auto</option>
                            <option value="Moto">Moto</option>
                            <option value="Bicicleta">Bicicleta</option>
                          </select>
                        </div>

                        <div id="divBicicleta">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Marca: </label>
                              <input type="text" class="form-control" name="marca" id="marcaBici">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Color: </label>
                              <input type="text" class="form-control" name="color" id="colorBici">
                            </div>
                        </div>
                        <div id="divAutoMoto" class="form-group">
                          <div id="lectorCodigo" class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Muestre la Tarjeta de Identificacion del Vehiculo:</label>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="barcode-scanner"></div>

                          </div>

                          <div id="datosVehiculoInvitado" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Placa:</label>
                              <input type="text" class="form-control" name="placa" id="placa" readonly="true">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Marca: </label>
                              <input type="text" class="form-control" id="marca" readonly="true">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Modelo: </label>
                              <input type="text" class="form-control" id="modelo" readonly="true">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label>Color: </label>
                              <input type="text" class="form-control" id="color" readonly="true">
                            </div>
                          </div>

                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <button type="submit" id="btnRegistrar" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Registrar</button>
                        </div>
                        
                      </form>

                    </div>
                    <!-- /.box-body -->
                  </div>
                  <form action="controlarIngreso.php" method="POST">
                        <input type="hidden" name="codigo" value="<?php if(isset($_POST["codigoAEnviar"])){echo $_POST['codigoAEnviar'];}else{echo "";}?>">
                        <input type="hidden" name="DNIInvitado" value="<?php if(isset($_POST["codigoInvitado"])){echo $_POST['codigoInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="nombreInvitado" value="<?php if(isset($_POST["nombreInvitado"])){echo $_POST['nombreInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="apePInvitado" value="<?php if(isset($_POST["ape_paternoInvitado"])){echo $_POST['ape_paternoInvitado'];}else{echo "";}?>">
                          <input type="hidden" name="apeMInvitado" value="<?php if(isset($_POST["ape_maternoInvitado"])){echo $_POST['ape_maternoInvitado'];}else{echo "";}?>">
                        <button type="submit" class="btn btn-default"> Regresar</button>
                      </form>
                  <!-- /.box -->
                </div>

        </div>
    </section>
    <!-- /.content -->
  </div> 

<?php
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

<script type="text/javascript" src="scripts/administrarVehiculo.js"></script>