<head>
    <style>
        table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<?php
    $varsta = 22;
    if(($varsta > 12) && ($varsta < 20)){
        $mesaj = "sunteti adolescent";
    }else if($varsta > 40){
        $mesaj = "sunteti om matur!";
    }else{
        $mesaj = "sunteti in floarea varstei ... repede la munca";
    }
    // $nume = "Anisoara";
    echo ($nume) ? "$nume, $mesaj" : "Anonymous, $mesaj";
?>
<?php
    echo "<br />";
    $w = date('w');
    $dayOfTheWeek;
    switch($w){
        case 1: $dayOfTheWeek = "luni"; break;
        case 2: $dayOfTheWeek = "marti"; break;
        case 3: $dayOfTheWeek = "miercuri"; break;
        case 4: $dayOfTheWeek = "joi"; break;
        case 5: $dayOfTheWeek = "vineri"; break;
        case 6: $dayOfTheWeek = "sambata"; break;
        case 0: $dayOfTheWeek = "duminica"; break;
    }
    echo "Azi, $dayOfTheWeek  ", date('d.m.Y');
?>
<!-- Tema pentru acasa -->
<?php
    $date = date('w');
    $timeOne;
    $timeTwo;
    //0 for sunday 6 for saturday
    switch($date){
        case 1: case 3: case 5: $timeOne = "8:00-12:00"; $timeTwo = "Liber"; break;
        case 2: case 4: case 6: $timeOne = "Liber"; $timeTwo = "12:00-16:00"; break;
        default: $timeTwo = "Liber"; $timeOne = "Liber"; break;
    }
?>
<table>
    <thead>
        <tr>
            <th colspan="3">Orar medici</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                Nr.o
            </td>
            <td>    
                Nume, prenume
            </td>
            <td>
                Orar
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>    
                Axenti Ecaterina
            </td>
            <td>
                <?= $timeOne ?>
            </td>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>    
                Ailoaiei Elina
            </td>
            <td>
                <?= $timeTwo ?>
            </td>
        </tr>
    </tbody>
</table>
<br />
<?php
    echo "Script personal<br/>";
    $month = date('m');
    if($month >= 6 && $month <=8){
        echo "vara";
    }else{
        echo "!vara";
    }
?>