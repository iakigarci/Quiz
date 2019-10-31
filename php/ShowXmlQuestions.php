<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
    <section class="main" id="s1">
        <div>
            <?php 
                $xml = simplexml_load_file("../xml/Questions.xml");
                echo "<table border=\"1\"><tr><th>Autor</th><th>Enunciado</th><th>Respuesta Correcta</th><th>Respuestas Incorrectas</th><th>Tema</th></tr>";
                foreach($xml as $assessmentItem){
                    echo"<tr><td>".$assessmentItem["author"]."</td>";
                    echo"<td>".$assessmentItem->itemBody->p."</td>";
                    echo"<td>".$assessmentItem->correctResponse->value."</td>";
                    echo"<td>";
                    
                    foreach($assessmentItem->incorrectResponses->value as $value){
                        echo $value."<br>";
                    }
                    echo"</td>";
                    
                    echo"<td>".$assessmentItem["subject"]."</td>";
                    echo"</tr>";
                }
                echo "</table>";
            ?>
        </div>
    </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
