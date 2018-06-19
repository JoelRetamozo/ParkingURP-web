<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ParkingURP | Recordar Contraseña</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <b>ParkingURP</b>
  </div>
  <!-- /.login-logo -->
  <form id="frmRecuerda" method="POST" class="login-box-body">
    <p class="login-box-msg">Recuerda tu Contraseña</p>

    	<div class="form-group has-feedback">
        <input type="email" id="correo" class="form-control" placeholder="Ingrese Codigo" required="true">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
     	</div>
      <div class="form-group">
        <span>Le enviaremos su contraseña a este correo.</span>
      </div>

      <div class="form-group">
        <a href="login.html" class="btn btn-default">Cancelar</a>

        <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-send"></span> Enviar</button>
      </div>

  </form>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../public/js/bootbox.min.js"></script>

<script src="scripts/recordarContrasena.js"></script>

</body>
</html>