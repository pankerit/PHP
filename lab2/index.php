<?php
    $nume = "Amariei";
    $prenume = "Petru";
    echo "Numele de familie al clientului este $nume, iar prenumele este $prenume.";
    $varsta = 30;
    print "<br/>Varsta clientului este $varsta.";
?>
<br />
<?php 
    $d = date('W');
    print "$d";
    if($d == 'Fri') echo "<br /> Un weekend placut in continuare!";
    else echo "<br />O zi de munca placuta sa aveti!";
    echo $d == 'Fri' ? "<br /> Un weekend placut in continuare!" : "<br />O zi de munca placuta sa aveti!";
    if($d == 'Fri') echo "<br /> Un weekend placut in continuare!";
    elseif ($d == 'Sun') echo 'De maine incepe o saptamana de lucru... dar azi va mai odihniti';
    else echo "<br />O zi de munca placuta sa aveti!";
?>
