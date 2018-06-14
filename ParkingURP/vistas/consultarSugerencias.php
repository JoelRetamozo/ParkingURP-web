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
        Consultar Sugerencias
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Consultar Sugerencias</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">

          <div class="col-md-12">

            <table id="tblSugerencias" class="mdl-data-table" style="width:100%">
              <thead>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Crítica</th>
                <th>Detalle</th>
              </thead>
              <tbody>
              </tbody>
            </table>

          </div>

        </div>
        
    </section>
    <!-- /.content -->
  </div>

  <div class="modal fade" id="modal-sugerencia">
          <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                  <h4 class="modal-title">Detalle de Sugerencia de Usuario</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Codigo: </label>
                    <input type="text" class="form-control" id="codigo" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Nombre: </label>
                    <input type="text" class="form-control" id="nombre" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Apellido Paterno: </label>
                    <input type="text" class="form-control" id="ape_paterno" readonly="true">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Apellido Materno: </label>
                    <input type="text" class="form-control" id="ape_materno" readonly="true">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Detalle: </label>
                    <textarea class="form-control" rows="3" id="detalle" style="margin: 0px 30px 0px 0px; height: 100px; width: 100%;" readonly="true"></textarea>
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>Imagen: </label>
                    <img id="imagen"/>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="ClearDatosSugerencia()">Aceptar</button>
                </div>  

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

<script type="text/javascript" src="scripts/consultarSugerencias.js"></script>

<?php 

}

//Liberar el espacio del buffer
ob_end_flush();
?>