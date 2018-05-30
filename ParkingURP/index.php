<?php

ob_start();
session_start();

if(!isset($_SESSION["nombre"])){
  //No se ha logeado de manera correcta
 	header("Location: vistas/login.html");
}else{
	header("Location: vistas/index.php");
}

ob_end_flush();

?>