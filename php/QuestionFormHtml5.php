<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/ShowImageInForm.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

    <form action="AddQuestionWithImage.php" name="fquestion" id="fquestion" method="post" enctype="multipart/form-data">
            <p>Introduce tu dirección de correo: *</p>
            <input type="email" size="60" id="dirCorreo" placeholder="usuario@ehu.es" name="dirCorreo" required pattern="((^[a-zA-Z]+(([0-9]{3})+@ikasle\.ehu\.(eus|es))$)|^[a-zA-Z]+(\.[a-zA-Z]+@ehu\.(eus|es)|@ehu\.(eus|es))$)">
            <p>Introduce el enunciado de la pregunta: *</p>
            <input type="text" size="60" id="nombrePregunta" placeholder="Enunciado Pregunta" name="nombrePregunta" required pattern="^.{10,}$">
            <p>Respuesta correcta: *</p>
            <input type="text" size="60" id="respuestaCorrecta" placeholder="Respuesta Correcta" name="respuestaCorrecta" required>
            <p>Respuesta incorrecta1: *</p>
            <input type="text" size="60" id="respuestaIncorrecta1" placeholder="Respuesta Incorrecta 1" name="respuestaIncorrecta1" required>
            <p>Respuesta incorrecta2: *</p>
            <input type="text" size="60" id="respuestaIncorrecta2" placeholder="Respuesta Incorrecta 2" name="respuestaIncorrecta2" required>
            <p>Respuesta incorrecta3: *</p>
            <input type="text" size="60" id="respuestaIncorrecta3" placeholder="Respuesta Incorrecta 3" name="respuestaIncorrecta3" required>
            <p>Complejidad de la pregunta: *</p>
            <select id="complejidad" name="complejidad" >
                <option value="1">Baja</option>
                <option value="2" selected>Media</option>
                <option value="3">Alta</option>
            </select>
            <p>Introduce el tema de la pregunta: *</p>
            <input type="text" size="60" id="temaPregunta" placeholder="Tema de la pregunta" name="temaPregunta" required>
            <div id="selector">
            <input type="file" id="file" accept="image/*" name="Imagen" required>
            </div>
            <p> <input type="submit" id="submit" value="Enviar"> <input type="reset" value="Limpiar"></p>
        </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
