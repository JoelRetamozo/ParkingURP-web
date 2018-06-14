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
                      <div id="divArchivo" class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                  <label for="archivo">Ingrese el registro Excel de los Conductores permitidos: </label>
		                  <input type="file" id="archivo" class="form-control" name="archivo" onchange="validarExcel(this.value)" required="true">

                      <span id="spanMsgError" class="help-block"><i class="fa fa-times-circle-o"></i> Debe ingresar un archivo Excel (.xls o .xlsx)</span>
		                </div>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                  
                  <div class="form-group col-lg-12 col-md-12 col-sm-12
                  col-xs-12">
                    <button class="btn btn-primary pull-right" type="submit" id="btnRegistrar"><i class="fa fa-save"></i> Registrar</button>
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

}else{
  require 'home.php';
}

require 'footer.php';
?>

<script type="text/javascript" src="scripts/registrarConductores.js"></script>

<?php 

}

//Liberar el espacio del buffer
ob_end_flush();
?>