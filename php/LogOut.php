<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      <h2>Adios, vuelve cuando quieras</h2>
        <?php
            sleep(2);
            header("location:Layout.php");
        ?>
      
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
