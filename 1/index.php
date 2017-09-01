<?php session_start(); ?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
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
	<?php include "php/navbar.php"; ?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Registro</h2>

			<form role="form" name="registro" action="php/registro.php" method="post" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="cliente">Cliente:</label>
			    <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nombre de cliente">
			  </div>
			  <div class="form-group">
			    <label for="trabajo_r">Trabajo ralizado:</label>
			    <input type="text" class="form-control" id="trabajo_r" name="trabajo_r" placeholder="Trabajo realizado">
			  </div>
			  <div class="form-group">
			    <label for="datepicker_i">Fecha de inicio:</label>
			    <input type="text" class="form-control" id="datepicker_i" name="datepicker_i" placeholder="Fecha de inicio">
			  </div>
			  <div class="form-group">
			    <label for="datepicker_t">Fecha de termino:</label>
			    <input type="text" class="form-control" id="datepicker_t" name="datepicker_t" placeholder="Fecha de termino">
			  </div>
			  <div class="form-group">
			    <label for="lider_b">Lider de brigada:</label>
			    <input type="text" class="form-control" id="lider_b" name="lider_b" placeholder="Lider de brigada">
			  </div>
			  <div class="form-group">
			    <label for="equipo_t">Equipo de trabajo:</label>
			    <input type="text" class="form-control" id="equipo_t" name="equipo_t" placeholder="Equipo de trabajo">
			  </div>

			  <button type="submit" class="btn btn-default">Registrar</button>
			</form>
		</div>
	</div>
</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>