<?php
	session_start();
	include("../Modelo/tarjeta.php");
	$tar = new tarjeta();


	$cantidadTarjetas = $tar->obtenerCantidadTarjetas();
	$cantidadTarjetasA = $tar->obtenerCantidadTarjetasGrupo(1);	
	$cantidadTarjetasB = $tar->obtenerCantidadTarjetasGrupo(2);
	$cantidadTarjetasC = $tar->obtenerCantidadTarjetasGrupo(3);
	$cantidadTarjetasD = $tar->obtenerCantidadTarjetasGrupo(4);
	$cantidadTarjetasE = $tar->obtenerCantidadTarjetasGrupo(5);
	$cantidadTarjetasF = $tar->obtenerCantidadTarjetasGrupo(6);
	$cantidadTarjetasG = $tar->obtenerCantidadTarjetasGrupo(7);
	$cantidadTarjetasH = $tar->obtenerCantidadTarjetasGrupo(8);
	
	if($cantidadTarjetasA < 10)
	{
		$grupo = 1;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasB < 10)
	{
		$grupo = 2;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasC < 10)
	{
		$grupo = 3;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasD < 10)
	{
		$grupo = 4;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasE < 10)
	{
		$grupo = 5;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasF < 10)
	{
		$grupo = 6;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasG < 10)
	{
		$grupo = 7;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}

	elseif($cantidadTarjetasH < 10)
	{
		$grupo = 8;
		$k = $tar->agregarTarjeta($_POST['rol'], $grupo,$_POST['ayudante'],"None");
		$_SESSION['work'] = $k;
	}


	header("Location: ../Vista/Tarjetas/agregarTarjeta.php");
?>