<!--DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <style>
      .error {font-weight: bold; color:red;}
      .mensaje {color:#030;}
      .listadoImagenes img {float:left;border:1px solid #ccc; padding:2px;margin:2px;}
      </style>
  </head>

  <body-->
    <?php
      # Conectamos con MySQL
      $mysqli=new mysqli("localhost","root","","actividades");
      if (mysqli_connect_errno()) {
          die("Error al conectar: ".mysqli_connect_error());
      }
      # Comprovamos que se haya subido un fichero
      #if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
      if (isset($_FILES["userfile"]["tmp_name"]) and (is_uploaded_file($_FILES["userfile"]["tmp_name"])))
      {
          # verificamos el formato de la imagen
          if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
          {
              # Cogemos la anchura y altura de la imagen
              $info=getimagesize($_FILES["userfile"]["tmp_name"]);

              # Escapa caracteres especiales
              $imagenEscapes=$mysqli->real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

              # Agregamos la imagen a la base de datos
              $sql="INSERT INTO `imagephp` (anchura,altura,tipo,imagen) VALUES (".$info[0].",".$info[1].",'".$_FILES["userfile"]["type"]."','".$imagenEscapes."')";
              $mysqli->query($sql);

              # Cogemos el identificador con que se ha guardado
              $id=$mysqli->insert_id;

              # Mostramos la imagen agregada
              echo "<div class='mensaje'>Imagen agregada con el id ".$id."</div>";
          }else{
              echo "<div class='error'>Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG.</div>";
          }
      }
    ?>
    <form enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <input name="userfile" type="file">
        <!--p><input type="submit" value="Guardar Imagen"-->
    </form>
  <!--/body>
</html-->
