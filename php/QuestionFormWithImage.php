<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      <form action="" method="get">
        <div class="form-group">
          <label for="dirCorreo">Correo electrónico</label>
            <input type="text" class="form-control" id="dirCorreo" >
        </div>
        <div class="form-group">
          <label for="enunciadoPre">Enunciado de la pregunta</label>
            <input type="text" class="form-control" id="enunciadoPre" >
        </div>
        <div class="form-group">
          <label for="resCorrecta">Respuesta correcta</label>
            <input type="text" class="form-control" id="resCorrecta" >
        </div>
        <div class="form-group">
          <label for="resInc1">Respuesta incorrecta 1</label>
            <input type="text" class="form-control" id="resInc1" >
        </div>
        <div class="form-group">
          <label for="resInc2">Respuesta incorrecta 2</label>
            <input type="text" class="form-control" id="resInc2" >
        </div>
        <div class="form-group">
          <label for="resInc3">Respuesta incorrecta 3</label>
            <input type="text" class="form-control" id="resInc3" >
        </div>
        <div>
          <label for="dificultad">Selecciona dificultad</label>
          <select name="" id="dificultad"> 
            <option value="baja">Baja</option>
            <option value="media">Media</option>
            <option value="dificl">Dificil</option>
          </select>
        </div>
        <div>
        <label for="tema">Tema</label>
            <input type="text" class="form-control" id="tema" >
        </div>
        <div>
          <label for="imagen">Selecciona una imagen</label>
          <input type="file" name="imagen" id="imagen">
        </div>

        <!-- FALTA QUE APAREZCA LA IMAGEN -->
 
      </form>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
