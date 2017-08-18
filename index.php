<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ingreso a la plataforma virtual</title>
		<link rel="stylesheet" href="css/estilos.css" />
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script Language=Javascript src="js/jquery-1.12.4.js"></script>
		<script Language=Javascript src="js/jquery-ui.js"></script>
		<script>
		$( function() {
			$( "#datepicker_i" ).datepicker();
			$( "#datepicker_t" ).datepicker();
		} );
		</script>
	</head>
	<body>

		<form action="php/enviar.php" method="post" enctype="multipart/form-data">
			<label for="#">REGISTRO DE ACTIVIDADES</label><br>
				<div>
					<input id="encargado" type="text" name="encargado" placeholder="Encargado"><br>
					<textarea id="e_trabajo" name="e_trabajo" placeholder="Equipo de trabajo"></textarea><br>
					<input id="datepicker_i" type="text" name="datepicker_i" placeholder="Fecha de inicio"><br>
					<input id="datepicker_t" type="text" name="datepicker_t" placeholder="Fecha de termino"><br>
					<input id="t_trabajo" type="text" name="t_trabajo" placeholder="Tipo de trabajo"><br>
					<!-- Por si lo piden
					textarea rows="4" cols="40" name="trabajo" placeholder="Trabajao realizado"></textarea><br-->
					<?php include ("php/imagen.php"); ?>
					<input type="submit" name="Enviar">
				</div>
		</form>
	</body>
</html>
