<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<title>Club Deportivo La Venta</title>
	</head>
	<body>
	<?php
			    require 'conexion.php';
    
				//Comienzo trayendome el id del index.html
				$id=$_GET['id'];
				//Realizo la sentencia SQL
				$sql= "Select $id from clubDeportivo";
			
				// Ejecuto la sentencia y guardo el resultado
				//Ejecutamos sentencia y guardamos resultado.
				$resultado= $mysqli->query($sql);
			
			//Realizo la sentenica para poder eliminar.
				$sql= "delete from clubdeportivo where id like '$id'";
				//Guardamos resultado
				$resultado = $mysqli->query($sql);
				?>
			<br>
			<p class="alert alert-primary" role="alert">REGISTRO ELIMINADO</p> 
			<br>
			
				<a href="index.php" class='btn btn-primary'>Regresar</a>
			

	</body>
</html>