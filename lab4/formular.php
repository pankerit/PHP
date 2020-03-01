<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="formular.css" />
    <title>Formular</title>
</head>
<body>
    <div class="stilDiv">
        <form action="formular.php" method="post">
            <fieldset>
                <legend>Parerea dvoastra conteaza!</legend>
                <p> <label for="nume">Introdu numele: </label> <input type="text" name="nume" /><br />
                    <label for="prenume">Introdu prenumele: </label><input type="text" name="prenume" /><br />
                    <label for="email">E-mail-ul dvoastra: </label> <input type="text" name="email" /></p>
                <p>Va rugam, sa ne ziceti, daca va plac sau nu serviciile prestate de compania noastra:<br />
                    <input type="radio" name="optiune" value="Da" checked="checked" /> Da <br />
                    <input type="radio" name="optiune" value="Nu" /> Nu <br />
                    <input type="radio" name="optiune" value="Nu stiu" /> Nu-mi pot expune parerea</p>
                <p>Lasati-ne parerea dvoastra despre noi:<br />
                    <textarea name="comentariu" rows="10" cols="30"></textarea></p>
                <p> <input type="reset" value="Anuleaza">
                    <input type="submit" value="Transmite"></p>
            </fieldset>
        </form>
    </div>
    <?php    if(isset($_POST['nume']) && 
                isset($_POST['email']) && 
                isset($_POST['comentariu']) && 
                isset($_POST['optiune'])): ?>
        <div class="rezultat">
            D-voastra va numiti: <b><?php echo $_POST['nume']; ?> </b>, iar prenumele este:  <b><?php echo $_POST['prenume']; ?> </b><br />
            Aveti adresa de e-mail:  <b><?php echo $_POST['email']; ?> </b><br />
            <br />
            La intrebarea "Daca sunteti multumiti de serviciile companiei noastre", ati raspuns:  <b><?php echo $_POST['optiune']; ?> </b>, iar comentariul lasat de dvoastra a fost:	<br />
            <i><?php echo $_POST['comentariu']; ?></i>
        </div>
    <?php endif; ?>
</body>
</html>