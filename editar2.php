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
		
			//Establezco conexion
			require 'conexion.php';
			$sql= "SELECT * FROM clubDeportivo";
		
			// Ejecuto la sentencia y guardo el resultado
			$resultado= $mysqli->query($sql);

			// obtengo los datos DEL FORMULARIO
			$id=$_POST['id'];
			$nombre=$_POST['nombre'];
    		$telefono=$_POST['telefono'];
    		$fecha=$_POST['fecha_nacimiento'];
			$categoria=$_POST['set'];
			
			try{
				$sql = "update clubDeportivo set nombre= '$nombre', telefono= '$telefono', fecha_nacimiento= '$fecha', categoria= '$categoria' where id like '$id'";
				$resultado= $mysqli->query($sql);
				?>
		<br>
		<p class="alert alert-primary" role="alert">REGISTRO MODIFICADO</p> 
		<br>
	<?php
			}catch(Exception $e){
				echo '<p class="alert alert-danger" role="alert">ERROR</p> ';
			}
	?>

		
			<a href="index.php" class='btn btn-primary'>Regresar</a>
		<?php
		
	?>
	</body>
</html>

