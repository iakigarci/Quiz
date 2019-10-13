<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

		<?php 
        //Creamos la conexion con la BD.
        $mysqli = mysqli_connect("localhost","root","","quiz");
        if(!$mysqli)
        {
            die("Fallo al conectar a MySQL: " .mysqli_connect_error());
        }
		//Creamos la consulta que introducira los datos en el servidor
        $email = $_REQUEST['dirCorreo'];
        $enunciado = $_REQUEST['nombrePregunta'];
        $respuestac = $_REQUEST['respuestaCorrecta'];
        $respuestai1 = $_REQUEST['respuestaIncorrecta1'];
        $respuestai2 = $_REQUEST['respuestaIncorrecta2'];
        $respuestai3 = $_REQUEST['respuestaIncorrecta3'];
        $complejidad = $_REQUEST['complejidad'];
        $tema = $_REQUEST['temaPregunta'];
        $image = $_FILES['Imagen']['tmp_name'];
        $contenido_imagen = base64_encode(file_get_contents($image));
    
        $sql = "INSERT INTO PREGUNTAS(email, enunciado, respuestac, respuestai1, respuestai2, respuestai3, complejidad, tema, imagen) VALUES('$email', '$enunciado', '$respuestac', '$respuestai1', '$respuestai2', '$respuestai3', $complejidad, '$tema', '$contenido_imagen')";
    
        if(!mysqli_query($mysqli,$sql))
        {
            die("Error: " .mysqli_error($mysqli));
        }
        echo "Registro añadido";
        
        mysqli_close($mysqli);
    ?>
    </div>
      <div>
        <a href="ShowQuestionsWithImage.php">Click en este enlace para ver todos los registros.</a>
      </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
