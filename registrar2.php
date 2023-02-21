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
			$nombre=$_POST['nombre'];
    		$telefono=$_POST['telefono'];
    		$fecha=$_POST['fecha_nacimiento'];
			$categoria=$_POST['categoria'];

			// Inserto los datos del formulario en la tabla.
			$sql= "insert into clubDeportivo (nombre, telefono, fecha_nacimiento, categoria)
			values ('$nombre','$telefono','$fecha','$categoria')";
			
			// Ejecuto la sentencia(try|catch)
			try{
				$resultado = $mysqli->query($sql);
				//Si da error se salta esta parte y muestra la siguiente
				?>
				<div class="alert alert-primary" role="alert">
					<strong>REGISTRO AGREGADO</strong>
			</div>
			<p><a href='index.php'>
				<button type='button' class='btn btn-primary'>Regresar</button></a></p>
			<?php
			 //si da error lo graba en $e y lo mostramos por pantalla con getMessage
			}catch (Exception $e){
				echo 'Ha ocurrido un error: ', $e->getMessage();
				echo "<a href='index.php'>
						<button type='button' class='btn btn-primary'>Regresar</button></a>";
			}
		?>

	</body>
</html>