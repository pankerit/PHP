<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="chess.css" />
    <title>Chess</title>
</head>
<body>
    <h1>Chess table</h1>
    <table>
        <tr class="top-margins">
            <td></td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
            <td>D</td>
            <td>E</td>
            <td>F</td>
            <td>G</td>
            <td>H</td>
            <td></td>
        </tr>
        <?php
            for($i = 1, $j = 8; $i <= 8; $i++, $j--){
                echo "<tr><td class='top-margins'>$i</td>";
                for($z = 0; $z < 8; $z++){
                    if($z % 2 != $i % 2){
                        echo "<td class='white'></td>";
                    }else{
                        echo "<td class='black'></td>";
                    }
                }
                echo "<td class='top-margins'>$j</td></tr>";
            }
        ?>
        <tr class="top-margins">
            <td></td>
            <td>H</td>
            <td>G</td>
            <td>F</td>
            <td>E</td>
            <td>D</td>
            <td>C</td>
            <td>B</td>
            <td>A</td>
            <td></td>
        </tr>
    </table>
    <a href="image.php">Go back</a>
</body>
</html>