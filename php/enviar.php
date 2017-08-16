<html>
<head>
	<meta charset="utf-8">
</head>
</html>

<?php

// Recibimos por POST los datos procedentes del formulario

$encagado = $_POST["encargado"];
$e_trabajo = $_POST["e_trabajo"];
$datepicker_i = $_POST["datepicker_i"];
$datepicker_i = $_POST["datepicker_t"];
$t_trabajo = $_POST["t_trabajo"];

// Abrimos la conexion a la base de datos
include("conexion.php");

$_GRABAR_SQL = "INSERT INTO $tabla_db1 (encargado,e_trabajo,datepicker_i,datepicker_t,t_trabajo) VALUES ('$encargado','$e_trabajo','$datepicker_i','$datepicker_t','$t_trabajo')";
mysql_query($_GRABAR_SQL);

// Cerramos la conexion a la base de datos
include("cierra_conexion.php");

// Confirmamos que el registro ha sido insertado con exito

echo "
<p>Los datos han sido guardados con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
?>
