<?php 

	include("../Modelo/tarjeta.php");
	$tar = new tarjeta();
	$tar->retirarTarjeta($_POST['rol'],$_POST['ayudante']);	
	header("Location: ../Vista/Tarjetas/retirarTarjetas.php?rol=".$_POST['rol']."");

?>