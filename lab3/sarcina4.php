<html>
    <body>
        <?php
            $noteInfo = array( 
                array (1, "Ivanov", "Ivan", 7),
                array (2, "Covaliov", "Catalina", 9),
                array (3, "Avanesov", "Tatiana", 8),
                array (4, "Gurau", "Ana", 10),
                array (5, "Dedin", "Catalin",  9),
                array (6, "Chitoroaga", "Vera",  8),
                array (7, "Josan", "Caterina",  7),
                array (8, "Josan", "Nina",  7),
                array (9, "Nik", "Colea",  8),
            );
        ?>
        <table border="1">
            <tr style="background-color: green; color: white">
                <th colspan="4">Notele elevilor clasei a 10-a, la informatica</th>
            </tr>
            <tr style="background-color: green; color: white">
                <th>Nr.</th>
                <th>Nume</th>
                <th>Prenume</th>
                <th>Nota</th>
            </tr>
        <?php
            for ($linie = 0; $linie <= 8; $linie++) {
                echo "<tr>";
                for ($coloana = 0; $coloana <= 3; $coloana++) {
                    echo "<td>" . $noteInfo[$linie][$coloana] . "</td>";
                }
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>
<?php
    function media($studenti){
        $numberOfStudents = count($studenti);
        $gradesSum = 0;
        for($i = 0;$i<count($studenti);$i++){
            $gradesSum += $studenti[$i][3];
        }
        return $gradesSum / $numberOfStudents;
    }
    function moreThanEight($students){
        $count = 0;
        for($i = 0;$i<count($students);$i++){
            if($students[$i][3] >= 8){
                $count++;
            }
        }
        return $count;
    }
?>

<b>Media: </b> <?= media($noteInfo); ?> <br />
<b>Elevi cu nota mai mare de 7: </b> <?= moreThanEight($noteInfo); ?> <hr />