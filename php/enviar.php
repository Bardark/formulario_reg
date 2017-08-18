<html>
<head>
	<meta charset="utf-8">
</head>
</html>

<?php

// Recibimos por POST los datos procedentes del formulario

$encargado = $_POST["encargado"];
$e_trabajo = $_POST["e_trabajo"];
$datepicker_i = $_POST["datepicker_i"];
$datepicker_t = $_POST["datepicker_t"];
$t_trabajo = $_POST["t_trabajo"];
//$userfile = $_POST["userfile"];

// Abrimos la conexion a la base de datos
mysql_connect("localhost","root","");
mysql_select_db("actividades") OR DIE ("Error: No es posible establecer la conexión");
mysql_query("INSERT INTO registro (encargado,e_trabajo,fecha_i,fecha_t,t_trabajo) VALUES ('$encargado','$e_trabajo','$datepicker_i','$datepicker_t','$t_trabajo')");

//Inserción de imagen en la BD

# Conectamos con MySQL
# Comprovamos que se haya subido un fichero
if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
{
		# verificamos el formato de la imagen
		if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
		{
				# Cogemos la anchura y altura de la imagen
				$info=getimagesize($_FILES["userfile"]["tmp_name"]);

				# Escapa caracteres especiales
				$imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

				# Agregamos la imagen a la base de datos
				$sql="INSERT INTO `actividades` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
				$mysqli->query($sql);

				# Cogemos el identificador con que se ha guardado
				$id=$mysqli->insert_id;

				# Mostramos la imagen agregada
				echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
		}else{
				echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
		}
}

// Cerramos la conexion a la base de datos
//include("cierra_conexion.php");

// Confirmamos que el registro ha sido insertado con exito

echo "
<p>Los datos han sido guardados con exito.</p>

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>
";
?>
