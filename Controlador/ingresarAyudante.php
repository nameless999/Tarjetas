<?php
	
	include("../Modelo/usuario.php");
	include("../Modelo/conexion.php");
	$us = new usuario();
	$us->agregarUsuario($_POST['nombre'],$_POST['correo'],$_POST['password'],$_POST['permiso']);
	header("Location: ../Vista/panel.php");
?>