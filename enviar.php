<html>
<head>
	<meta charset="utf-8">
</head>
</html>

<?php

// Recibimos por POST los datos procedentes del formulario

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$fecha = date("d-m-Y");

// Abrimos la conexion a la base de datos
include("conexion.php");    

$_GRABAR_SQL = "INSERT INTO $tabla_db1 (nombre,email,fecha) VALUES ('$nombre','$email','$fecha')";
mysql_query($_GRABAR_SQL);

// Cerramos la conexion a la base de datos
include("cierra_conexion.php");

// Confirmamos que el registro ha sido insertado con exito

echo "
<p>Los datos han sido guardados con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
?>
