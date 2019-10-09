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

    <form action="AddQuestion.php" name="fquestion" id="fquestion">
            <p>Introduce tu dirección de correo: *</p>
            <input type="email" size="60" id="dirCorreo" name="Direccion Correo Electronico" required>
            <p>Introduce el enunciado de la pregunta: *</p>
            <input type="text" size="60" id="nombrePregunta" name="Enunciado Pregunta" required>
            <p>Respuesta correcta: *</p>
            <input type="text" size="60" id="respuestaCorrecta" name="Respuesta Correcta" required>
            <p>Respuesta incorrecta1: *</p>
            <input type="text" size="60" id="respuestaIncorrecta1" name="Respuesta Incorrecta 1" required>
            <p>Respuesta incorrecta2: *</p>
            <input type="text" size="60" id="respuestaIncorrecta2" name="Respuesta Incorrecta 2" required>
            <p>Respuesta incorrecta3: *</p>
            <input type="text" size="60" id="respuestaIncorrecta3" name="Respuesta Incorrecta 3" required>
            <p>Complejidad de la pregunta: *</p>
            <select id="complejidad" >
                <option value="baja">Baja</option>
                <option value="media" selected>Media</option>
                <option value="alta">Alta</option>
            </select>
            <p>Introduce el tema de la pregunta: *</p>
            <input type="text" size="60" id="temaPregunta" name="Tema de la Pregunta" required>
            <div id="selector">
            <input type="file" id="file" accept="image/*" name="Imagen" required>
            </div>
            <img id="verImagen" src="" width="100"/>
            
            <p> <input type="submit" id="submit" value="Enviar"> <input type="reset" value="Limpiar"></p>
        </form>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
     <script>
         
         $('document').ready(function(){
            $('#submit').click(function(){
                return validarCorreo();
            });
        });
        function validarCorreo(){
            var correo = $('#dirCorreo').val();
            console.log(correo);
            var regexAlu = /^[a-zA-Z]+(([0-9]{3})+@ikasle\.ehu\.(eus|es))$/;
            var regexPro = /^[a-zA-Z]+(\.[a-zA-Z]+@ehu\.(eus|es)|@ehu\.(eus|es))$/;

            if(regexAlu.test(correo)){
                return true;
            }
            else if(regexPro.test(correo)){
                return true;
            }
            alert("El correo electronico no es valido");
            return false;
        }
        </script>
</body>
</html>
