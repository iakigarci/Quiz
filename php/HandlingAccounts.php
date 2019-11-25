<?php include'../php/Seguridad.php'?>
<?php
    if($_SESSION['tipo']=="user"){
        header('location:Layout.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
      <div>
      
      
      </div>


  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>