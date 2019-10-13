<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
</head>

<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>
      <?php
      $link = mysqli_connect("localhost", "root", "", "quiz");
      $tabla = mysqli_query($link, "select correo,enunciado from preguntas");
      echo '<table border=1> <tr> <th> CORREO </th> <th> ENUNCIADO </th> </tr>';
      while ($row = mysqli_fetch_array($usuarios)) {
        echo '<tr><td>' . $row[‘dni’] . '</td> <td>' . $row[‘nombre’] . '</td></tr>';
      }
      echo '</table>';
      $usuarios->close();
      mysqli_close($link);
      ?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>