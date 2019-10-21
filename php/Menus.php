<?php if(isset($_GET['email'])){
        $email = "?email=".$_GET['email'];
    }else{
        $email = "";
    } ?>
<div id='page-wrap'>
<header class='main' id='h1'>
  <span class="right" id="register"><a href="SignUp.php">Registro</a></span>
        <span class="right" id="login"><a href="LogIn.php">Login</a></span>
        <span class="right" id="logout" style="display:none;"><a href="LogOut.php">Logout</a></span>

</header>
<nav class='main' id='n1' role='navigation'>
    <span><a href='Layout.php<?php echo $GLOBALS["email"];?>'>Inicio</a></span>
    <span id="insertq" style="display:none"><a href='QuestionFormHtml5.php<?php echo $GLOBALS["email"];?>'> Insertar Pregunta</a></span>
    <span id="showq" style="display:none"><a href='ShowQuestionsWithImage.php<?php echo $GLOBALS["email"];?>'>Ver Preguntas</a></span>
    <span><a href='Credits.php<?php echo $GLOBALS["email"];?>'>Creditos</a></span>
</nav>
    <script src="../js/jquery-3.4.1.min.js"></script>
<script>
    function inicioSesion(){
            $('#insertq').show();
            $('#showq').show();
            $('#register').hide();
            $('#login').hide();
            $('#logout').show();
        }
    
    function cierreSesion(){
            $('#insertq').hide();
            $('#showq').hide();
            $('#register').show();
            $('#login').show();
            $('#logout').hide();
    }
</script>
<?php
    
    if(isset($_GET['email'])){
        echo "<script>inicioSesion();</script>";
    }else{

        echo "<script>cierreSesion();</script>";
    }
    ?>
    
    
    
