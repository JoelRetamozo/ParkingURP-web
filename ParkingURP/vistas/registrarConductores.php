<?php
require 'header.php';
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registrar Conductores
        <small>Aqui podrá gestionar a un conductor</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">RegistrarConductores</li>
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

              <div class="panel-body" id="formularioregistro">
                <form name="formulario" id="formulario" method="POST" enctype="multipart/form-data">

                <div class="col-md-12">
                  <div class="box box-warning box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Conductores</h3>

                      <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                  <label for="archivo">Lista de Conductores</label>
		                  <input type="file" id="archivo" class="form-control" name="archivo">

		                  <p class="help-block">Ingrese el registro Excel de los Conductores permitidos.</p>
		                </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                  
                  <div class="form-group col-lg-12 col-md-12 col-sm-12
                  col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnRegistrar"><i class="fa fa-save"></i> Registrar</button>
                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                  </div>
                </form>
              </div>

              <div id="estaCargando" class="overlay">
	              <i class="fa fa-refresh fa-spin"></i>
	            </div>
            </div>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>

<?php
require 'footer.php';
?>

<script type="text/javascript" src="scripts/registrarConductores.js"></script>