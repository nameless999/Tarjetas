<?php

	class tarjeta
	{
		
		function _construct()
		  {

		  } 

		function obtenerTarjetas()
		{

	    include("conexion.php");
	    $query = "SELECT * FROM tarjeta ORDER BY grupo" ;
	    $result  = pg_query($query);
	    $tarjetas =  array();
	    while ($row = pg_fetch_row($result)) {
	      array_push($tarjetas, $row);
	        
		}
			return $tarjetas;
		}

		function obtenerTarjetaPorRol($rol_tarjeta)
		{

	    include("conexion.php");
	    $query = "SELECT * FROM tarjeta Where rol_tarjeta = '".$rol_tarjeta."'" ;
	    $result  = pg_query($query);
		$row = pg_fetch_row($result);   
		return $row;
		}

		function agregarTarjeta($rol_tarjeta,$grupo,$agregada_por,$entregada_por)
		{
			include("conexion.php");
		    $query = "INSERT INTO tarjeta(rol_tarjeta,grupo,agregada_por,entregada_por) VALUES('".$rol_tarjeta."','".$grupo."','".$agregada_por."','".$entregada_por."')";
		    $result = pg_query($query);
		    echo $result;
		}

		function obtenerCantidadTarjetas()
		{

		    include("conexion.php");
		    $query = "SELECT grupo FROM tarjeta";
		    $result  = pg_query($query);
			$rows = pg_num_rows($result);   
			return $rows;
		}

		function retirarTarjeta($rol_tarjeta,$retirado_por)
		{

		    include("conexion.php");
		    $query = "UPDATE tarjeta SET entregada_por = '".$retirado_por."' where rol_tarjeta = '".$rol_tarjeta."' ";
		    $result  = pg_query($query);
		}



		function obtenerCantidadTarjetasGrupo($grupo)
		{

		    include("conexion.php");

		    $query = "SELECT grupo FROM tarjeta where grupo = '".$grupo."'";
		    $result  = pg_query($query);
			$rows = pg_num_rows($result);   
			return $rows;
		}
	}

?>