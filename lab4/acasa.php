<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tema pentru acasa</title>
    <link rel="stylesheet" href="acasa.css" />
</head>
<body>
    <?php
        $nume = $_POST['nume'];
        $email = $_POST['email'];
        $subiect = $_POST['subiect'];
        $mesaj = $_POST['mesaj'];
        $errors = array();
        if(isset($_POST['submit'])){
            if(empty($nume)) $errors['nume'] = 'Numele este necesar'; else $errors['nume'] = '';
            if(empty($email)) $errors['email'] = 'Email este necesar'; else $errors['email'] = '';
            if(empty($subiect)) $errors['subiect'] = 'Subiectul este necesar'; else $errors['subiect'] = '';
            if(empty($mesaj)) $errors['mesaj'] = 'Mesajul este necesar'; else $errors['mesaj'] = '';
        }
    ?>
    <header>
        <span>Logo</span>
        <ul>
            <li><a href="#">Acasa</a></li>
            <li><a href="#">Cazare</a></li>
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">Galerie</a></li>
            <li><a href="#">Tarife</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
    <div class="form-container">
        <form method="POST" action="acasa.php">
            <section>
                <label for="nume">Nume*</label><input type="text" name="nume" id="nume"/><br /><span><?php echo $errors['nume'] ?></span><br/>
            </section>
            <section>
                <label for="email">Email*</label><input type="email" name="email" id="email"/><br /><span><?php echo $errors['email'] ?></span><br/>
            </section>
            <section>
                <label for="subiect">Subiect*</label><input type="text" name="subiect" id="subiect"/><br /><span><?php echo $errors['subiect'] ?></span><br/>
            </section>
            <section>
                <label for="mesaj">Mesaj*</label><textarea name="mesaj" id="mesaj"></textarea><br /><span><?php echo $errors['mesaj'] ?></span><br/>
            </section>
            <section>
                <input type="submit" name="submit" value="Trimite email" />
            </section>
        </form>
    </div>
    <?php
        if(isset($_POST['submit']) && $errors['nume'] == '' && $errors['email'] == '' && $errors['subiect'] =='' && $errors['mesaj'] == ''){
            echo "$nume<br />";
            echo "$email<br />";
            echo "$subiect<br />";
            echo "$mesaj<br />";
        }
    ?>
</body>
</html>