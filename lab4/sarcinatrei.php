<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
        <label for="nume">Nume</label><input id="nume" name="nume" type="text" /><br />
        <label for="prenume">Prenume</label><input id="prenume" name="prenume" type="text" /><br />
        <input type="radio" name="sex" value="male" />Barbat<br />
        <input type="radio" name="sex" value="female" />Femeie<br />
        <label for="email">Email</label><input id="email" name="email" type="email" /><br />
        <label for="comentariu">Comentariu</label><textarea id="comentariu" name="comentariu"></textarea><br />
        <input type="submit" name="submit" value="submit" />
    </form>
    <?php
        if(isset($_POST['submit']) && isset($_POST['nume'])
            && isset($_POST['prenume']) && isset($_POST['sex'])
            && isset($_POST['email']) && isset($_POST['comentariu']))
        {
            $sex = $_POST['sex'] == 'male' ? "Domnul" : "Doamna";
            $nume = $_POST['nume'];
            $prenume = $_POST['prenume'];
            $email = $_POST['email'];
            $comentariu = $_POST['comentariu'];
            echo "$sex $nume $prenume email: $email. Comentariu: $comentariu";
        }
    ?>
</body>
</html>