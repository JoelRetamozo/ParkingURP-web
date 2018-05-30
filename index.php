<?php

ob_start();
session_start();

if(!isset($_SESSION["nombre"])){
  //No se ha logeado de manera correcta
 	header("Location: ParkingURP/vistas/login.html");
}else{
	header("Location: ParkingURP/index.php");
}

ob_end_flush();

?>