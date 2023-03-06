<?php
	//Establezco conexion 
	require 'conexion.php';
	$id=$_GET['id'];
	$sql= "SELECT * FROM clubDeportivo where id='$id'";

	// Ejecuto la sentencia y guardo el resultado 
	$resultado= $mysqli->query($sql);

	while($fila = $resultado->fetch_assoc()){
		$nombre=$fila['nombre'];
    	$telefono=$fila['telefono'];
    	$fecha=$fila['fecha_nacimiento'];
		$categoria=$fila['categoria'];
	}


	
	
?>

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
	
	<!-- Añadimos div y le ponemos de clase container --> 
	<div class="container">
			<div class="row">
				<h1>Socios</h1>
			</div>
			
			<div class="row">
				<div class="col-md-8">
					<!-- Completar atributos de form --> 
					<form action="editar2.php" name="registro" autocomplete="off" method="POST">
						<div class="form-group">
							<!-- Nombre -->
							<label for="nombre">Nombre</label>
							<input class="form-control" type="texto" name="nombre" id="nombre" placeholder="Introduce el nombre" value=<?php echo $nombre?>>
							
						</div>
						
						<div class="form-group">
							<!-- Teléfono -->
							<label for="telefono" >Telefono</label>
							<input class="form-control" type="texto" name="telefono" id="telefono" placeholder="Introduce el teléfono" value=<?php echo $telefono?>>
							
						</div>
						
						<div class="form-group">
							<!-- Fecha nacimiento -->
							<label for="fecha_nacimiento">Fecha de nacimiento</label>
							<input class="form-control" type="date" name="fecha_nacimiento" id="fecha_nacimiento" value=<?php echo $fecha?>>
							
						</div>
						
						<div class="form-group">
							<!-- Categoría -->
							
							<label for="categoria"> Categoría</label>
							<select name="set" id="set" class="form-control" value=<?php echo $categoria?>>
								<option>AMATEUR</option>
								<option>PROFESIONAL</option>
							</select>
						</div>
						
						<div class="form-group">
						<label>
							<input type="submit" value="Editar" class='btn btn-primary'>
						<label>
							<input type="hidden" name="id" value="<?php echo $id ?>">
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.4.1.min.js" ></script>
		<script src="js/bootstrap.min.js" ></script>
	</body>
</html>				