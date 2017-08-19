<html lang="es">
<head>
	<meta charset="utf-8">
</head>
</html>

<?php
		// Recibimos por POST los datos procedentes del formulario
		$encargado = utf8_decode($_POST["encargado"]);
		$e_trabajo = utf8_decode($_POST["e_trabajo"]);
		$datepicker_i = utf8_decode($_POST["datepicker_i"]);
		$datepicker_t = utf8_decode($_POST["datepicker_t"]);
		$t_trabajo = utf8_decode($_POST["t_trabajo"]);

		// Abrimos la conexion a la base de datos
		mysql_connect("localhost","root","");
		mysql_select_db("actividades") OR DIE ("Error: No es posible establecer la conexión");
		mysql_query("INSERT INTO registro (encargado,e_trabajo,fecha_i,fecha_t,t_trabajo) VALUES ('$encargado','$e_trabajo','$datepicker_i','$datepicker_t','$t_trabajo')");

		//Inserción de imagen en la BD


		// Confirmamos que el registro ha sido insertado con exito
		echo "
					<p>Los datos han sido guardados con exito.</p>
					<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
		";
?>
