<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <form method="POST" action="test.php">
        <input placeholder="Nume" name="nume" type="text" />
        <p>Atlantida capitala Moldovei?</p>
        <input type="radio" name="capitala" value="F" /> True <input type="radio" name="capitala" value="T" /> False <br />
        <p>Capitala Rusiei?</p>
        <input type="radio" name="russia" value="T" /> Moscow <input type="radio" name="russia" value="F" /> Vladivostok <br />
        <p>x^2 = 4, X = ?</p>
        <input type="checkbox" value="2" name="x" />2 <input type="checkbox" value="-2" name="x" />-2 <input type="checkbox" value="4" name="x" />4 <br />
        <input type="submit" name="submit" value="TEST" />
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['nume'];
            $capitala = $_POST['capitala'];
            $russia = $_POST['russia'];
            $math = $_POST['x'];
            $result;
            if($capitala == 'T' && $russia == 'T' && ($math == '2' || $math == '-2')){
                $result = "$name, you are smart";
            }else{
                $result = "$name, incorect";
            }
            echo $result;
        }
    ?>
</body>
</html>