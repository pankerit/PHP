<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <?php if (!isset($_REQUEST['start'])) {?> 
            <form action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
            <p> <label for="nume">Introdu numele: </label> <input type="text" name="nume" /><br />
            <label for="prenume">Introdu prenumele: </label><input type="text" name="prenume" /><br />	</p>
            <p>Selecteaza zilele in care esti disponibil sa frecventezi cursul:</p>
            <select name="zi" size="3">
                <option value="1"  selected>Luni</option>
                <option value="2">Marti</option>
                <option value="3">Miercuri</option>
                <option value="4">Joi</option>
                <option value="5">Vineri</option>
                <option value="6">Sambata</option>
                <option value="7">Duminica</option>
            </select> 
            <p> <input type="reset" value="Anuleaza" />
            <input type="submit" value="Transmite" name="start" /></p>
        </form>
    <?php } else {	
            echo "Bine ati venit la noi pe site <b>" . $_REQUEST['nume']. " " . $_REQUEST['prenume'] . "</b>.<br />";
            //echo "Dvoastra sunteti disponibil sa accesati cursul in <b> " . $_POST['zi'] . "</b> zi.";
            if($_POST['zi'] == '6' || $_POST['zi'] == '7'){
                echo "Veti reusi sa studiati atent lectiile propuse, fiindca e o zi de odihna!";
            }else{
                echo "Dvoastra sunteti disponibil sa accesati cursul in <b> " . $_POST['zi'] . "</b> zi.";
            }
        } 
?>

</body>
</html>