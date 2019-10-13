<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous">
  </script>
  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
  crossorigin="anonymous"> -->
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <form action="" method="get">
        <div >
          <label for="dirCorreo">Correo electrónico</label>
            <input type="text" id="dirCorreo" ><br><br>
        </div>
        <div >
          <label for="enunciadoPre">Enunciado de la pregunta</label>
            <input type="text" id="enunciadoPre" ><br><br>
        </div>
        <div >
          <label for="resCorrecta">Respuesta correcta</label>
            <input type="text" id="resCorrecta" ><br><br>
        </div>
        <div >
          <label for="resInc1">Respuesta incorrecta 1</label>
            <input type="text" id="resInc1" ><br><br>
        </div>
        <div >
          <label for="resInc2">Respuesta incorrecta 2</label>
            <input type="text" id="resInc2" ><br><br>
        </div>
        <div >
          <label for="resInc3">Respuesta incorrecta 3</label>
            <input type="text" id="resInc3" ><br><br>
        </div>
        <div>
          <label for="dificultad">Selecciona dificultad</label>
          <select name="" id="dificultad"> 
            <option value="baja">Baja</option>
            <option value="media">Media</option>
            <option value="dificl">Dificil</option>
          </select>
          <br><br>
        </div>
        <div>
        <label for="tema">Tema</label>
            <input type="text" id="tema" ><br><br>
        </div>
        <div>
          <label for="imagen">Selecciona una imagen</label>
          <input type="file" name="imagen" id="imagen">
        </div>
        <br><br>
        <div>
          <input type="button" value="Submit" id="submit_b">
        </div>
      </form>
    </div>
  </section>
  
  <?php include '../html/Footer.html' ?>
  <script src="../js/ValidateFieldsQuestion.js"></script>
  <script src="../js/ShowImageInForm.js"></script>
</body>
</html>
