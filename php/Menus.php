<?php if(isset($_GET['email'])){
        $email = "?email=".$_GET['email'];
    }else{
        $email = "";
    } ?>
<script src="../js/cierreSesion.js"></script>
<script src="../js/inicioSesion.js"></script>
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
    <span id="showqxml" style="display:none"><a href='ShowXmlQuestions.php<?php echo $GLOBALS["email"];?>'>Ver Preguntas en XML</a></span>
    <span><a href='Credits.php<?php echo $GLOBALS["email"];?>'>Creditos</a></span>
</nav>
    <script src="../js/jquery-3.4.1.min.js"></script>

<?php
    
    if(isset($_GET['email'])){
        $email = $_GET['email'];
        $img = getImagenDeBD();
        echo "<script>inicioSesion(\"".$img."\",\"".$email."\");</script>";
    }else{

        echo "<script>cierreSesion();</script>";
    }
    
    function getImagenDeBD(){
        if(isset($_GET['email'])){
            include 'DbConfig.php';
            $mysqli = mysqli_connect($server,$user,$pass,$basededatos);
            if(!$mysqli){
                die("Error: ".mysqli_connect_error);
            }

            $sql = "SELECT foto FROM usuarios WHERE email=\"".$_GET['email']."\";";
            $resul = mysqli_query($mysqli,$sql, MYSQLI_USE_RESULT);
            if(!$resul){
                die("Error: ".mysqli_error($mysqli));
            }
            $img = mysqli_fetch_array($resul);
            return $img['foto'];
        }
        else{
            return "";
        }
    }
    ?>
    
    
    
    
    
