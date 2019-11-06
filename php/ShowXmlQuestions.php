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
            echo "<link rel='stylesheet' type='text/css' href='../styles/Tabla.css'>";
            echo "<table class='tabla_style'>";
            echo "<tr>";
            echo "<th>Autor</th>";
            echo "<th>Enunciado</th>";
            echo "<th>Respuesta Correcta</th>";
            echo "</tr>";
            $assessmentItems = simplexml_load_file('../xml/Questions.xml');
            foreach ($assessmentItems->xpath('//assessmentItem') as $assessmentItem) {
                echo "<tr>";
                echo "<td>{$assessmentItem['author']}</td>";
                echo "<td>{$assessmentItem->itemBody->p}</td>";
                echo "<td>{$assessmentItem->correctResponse->value}</td>";
                echo "</tr>";
            }
            echo "</table>"; 
            echo "<a href='../xml/Questions.xml'>Ver con xsl</a>";
            ?>
        </div>
    </section>
    <?php include '../html/Footer.html' ?>
</body>

</html>