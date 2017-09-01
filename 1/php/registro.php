<html lang="es">
    <head>
        <meta charset="utf-8">
    </head>
        <?php
        $cliente = utf8_decode($_POST['cliente']);
		$trabajo_r = utf8_decode($_POST['trabajo_r']);
		$datepicker_i = utf8_decode($_POST['datepicker_i']);
		$datepicker_t = utf8_decode($_POST['datepicker_t']);
		$lider_b = utf8_decode($_POST['lider_b']);
		$equipo_t = utf8_decode($_POST['equipo_t']); 
            // Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
            if(isset($_POST['cliente']) && !empty($_POST['cliente']) &&
            isset($_POST['trabajo_r']) && !empty($_POST['trabajo_r'])&& 
            isset($_POST['datepicker_i']) && !empty($_POST['datepicker_i']) && 
            isset($_POST['datepicker_t']) && !empty($_POST['datepicker_t']) &&  
            isset($_POST['lider_b']) && !empty($_POST['lider_b'])&&
        	isset($_POST['equipo_t']) && !empty($_POST['equipo_t'])) {

                // Si entramos es que todo se ha realizado correctamente 
                $link = mysql_connect("localhost","root",""); 
                mysql_select_db("bitacora",$link); 

                //Comprobamos que esxitan las variables
                if (isset($cliente) && isset($trabajo_r) && isset($datepicker_i) && isset($datepicker_t) && isset($lider_b) && isset($equipo_t)) {                

                	// Con esta sentencia SQL insertaremos los datos en la base de datos 
					mysql_query('INSERT INTO datos (cliente, trabajo_r, fecha_i, fecha_t, lider_b, equipo_t)                   
					VALUES ("'.$cliente.'","'.$trabajo_r.'","'.$datepicker_i.'","'.$datepicker_t.'","'.$lider_b.'",					"'.$equipo_t.'")');
        		
        		}
                // Ahora comprobaremos que todo ha ido correctamente 
                $my_error = mysql_error($link); 

                if(!empty($my_error)) { 

                    echo "Ha habido un error al insertar los valores. $my_error";  

                 } else { 

                    echo "Los datos han sido introducidos satisfactoriamente";

                } 

            } else { 

                echo "Error, no ha introducido todos los datos"; 
            }

        ?> 
    <body>
        <label>
        	<a href="../index.php"><input type="Submit" name="Submit" value="<<REGRESAR"></a> 
        </label>  
    </body>
</html>