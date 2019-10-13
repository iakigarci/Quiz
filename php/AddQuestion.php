<!DOCTYPE html>
<html>

<head>
  <?php include '../html/Head.html' ?>
</head>

<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      Código PHP para añadir una pregunta sin imagen
      <?php
      include 'DbConfig.php';
      $link = mysqli_connect("localhost", "root", "", "quiz");

      $email = $_REQUEST['dirCorreo'];
      $enunciado = $_REQUEST['enunciadoPre'];
      $correcta = $_REQUEST['resCorrecta'];
      $inc1 = $_REQUEST['resInc1'];
      $inc2 = $_REQUEST['resInc2'];
      $inc3 = $_REQUEST['resInc3'];
      $dificultad = $_REQUEST['dificultad'];
      $tema = $_REQUEST['tema'];

      $sql = "INSERT INTO PREGUNTAS(CORREO,ENUNCIADO,RES_COR,RES_INC1,RES_INC2,RES_INC3,DIFICULTAD,TEMA) 
      VALUES(
        '$email',
        '$enunciado',
        '$correcta',
        '$inc1',
        '$inc2',
        '$inc3',
        '$dificultad',
        '$tema')";
      if (!mysqli_query($link, $sql)) {
        die('Error: ' . mysqli_error($link));
      }
      echo "1 record added";
      echo "<p> <a href='ShowQuestions.php'> Ver registros </a>";
      mysqli_close($link);
      ?>

    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>

</html>