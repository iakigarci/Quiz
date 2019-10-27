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
            echo "<table border='1'>";
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
            ?>
        </div>
    </section>
    <?php include '../html/Footer.html' ?>
</body>

</html>