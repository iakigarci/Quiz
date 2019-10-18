<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      <h2>Registro de nuevo usuario.</h2>
      
    </div>
      
      <div>
         <form action="" name="fregister" id="fregister" method="post" enctype="multipart/form-data">
             <p>Selecciona el tipo de usuario. *</p>
            <select id="tipoUsu" name="tipoUsu">
                <option value="alumno" selected>Alumno</option>
                <option value="profesor">Profesor</option>
             </select>
            <p>Introduce tu dirección de correo: *</p>
            <input type="email" size="60" id="dirCorreo" name="dirCorreo" required >
            <p>Introduce tu nombre y apellido(s) *</p>
            <input type="text" size="60" id="nombreApellidos" name="nombreApellidos" required>
            <p>Contraseña. *</p>
            <input type="password" size="60" id="pass" name="pass" required>
            <p>Repite Contraseña *</p>
            <input type="password" size="60" id="passR" name="passR" required>
            <div id="selector">
            <p>Selecciona una foto de perfil. (Opcional) </p>
            <input type="file" id="file" accept="image/*" name="Imagen" required>
            </div>
            <p> <input type="submit" id="submit" value="Enviar"> <input type="reset" value="Limpiar"></p>
        </form>
      </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
