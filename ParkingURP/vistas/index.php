<?php 
ob_start();
session_start();

if(!isset($_SESSION["nombre"])){
  //No se ha logeado de manera correcta
 	header("Location: login.html");
}else{
	require 'header.php';

	require 'home.php';

	require 'footer.php';
}

ob_end_flush();
?>