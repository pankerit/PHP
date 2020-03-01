<?php
    $a = 0;
    $b = 0;
    for($i = 0;$i<=5;$i++){
        $a+=10;
        echo "a dupa operatie $a<br/>";
        $b+=5;
        echo "b dupa operatie $b<br/>";
    }
    echo "<br />Sfarsit ciclu, valoarea lui a este $a, iar b = $b";
?>
<hr />
<?php
    //Sarcina 2
    $i = 0;
    $num = 50;
    while($i<10){
        $num--;
        echo "num dupa calcul $num<br/>";
        $i++;
        echo "i dupa calcul $i<br/>";
    }
    echo "<br/>Ciclul s-a terminat la i = $i si num = $num";
?>
<hr />
<?php
    //Sarcina 3
    $adaos = 7;
    $pret = 120;
    do{
        $pret = $pret + $adaos;
        echo "Pret dupa calcul $pret<br/>";
        $adaos++;
        echo "Adaos dupa calcul $adaos<br/>";
    }while($adaos<10);
    echo "<br />Pretul nou va fi -- $pret";
?>
