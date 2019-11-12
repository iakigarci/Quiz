<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/ShowImageInForm.js"></script>
    <script src="../js/ShowQuestionsAjax.js"></script>
    <script src="../js/CleanPage.js"></script>
    <script src="../js/AddQuestionsAjax.js"></script>
    <script src="../js/CountQuestionsAjax.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
      <div id="users">
      
      </div>
      <div id="total-questions">

      </div>
      
      
    <div id="buttons">
        <p>
        <input type="button" id="insertq-button" value="Insertar Preguntas" onclick="verFormulario()">
        <input type="button" id="showq-button" value="Ver Preguntas" onclick="verPreguntas()">
        <input type="button" id="clean-button" value="Limpiar Pagina" onclick="clean()">
        </p>   
    </div>
    <div id="form" style="display: none">

    <form name="fquestion" id="fquestion" method="post" enctype="multipart/form-data">
            <p>Dirección de correo: </p>
            <input type="email" readonly size="60" id="dirCorreo" name="dirCorreo" value="<?php echo $_GET['email'];?>" required >
            <p>Introduce el enunciado de la pregunta: *</p>
            <input type="text" size="60" id="nombrePregunta" name="nombrePregunta" required>
            <p>Respuesta correcta: *</p>
            <input type="text" size="60" id="respuestaCorrecta" name="respuestaCorrecta" required>
            <p>Respuesta incorrecta1: *</p>
            <input type="text" size="60" id="respuestaIncorrecta1" name="respuestaIncorrecta1" required>
            <p>Respuesta incorrecta2: *</p>
            <input type="text" size="60" id="respuestaIncorrecta2" name="respuestaIncorrecta2" required>
            <p>Respuesta incorrecta3: *</p>
            <input type="text" size="60" id="respuestaIncorrecta3" name="respuestaIncorrecta3" required>
            <p>Complejidad de la pregunta: *</p>
            <select id="complejidad" name="complejidad" >
                <option value="1">Baja</option>
                <option value="2" selected>Media</option>
                <option value="3">Alta</option>
            </select>
            <p>Introduce el tema de la pregunta: *</p>
            <input type="text" size="60" id="temaPregunta" name="temaPregunta" required>
            <div id="selector">
            <input type="file" id="file" accept="image/*" name="Imagen">
            </div>
            <p> <input type="button" id="submit" value="Enviar" onclick="enviarForm()"> <input type="reset" value="Limpiar Formulario"></p>
        </form>
    </div>

    <div id="tabla-preguntas">
    </div>

      
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
