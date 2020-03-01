<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <header>
        <ul>
            <li><a href="#">Noi</a></li>
            <li><a href="#">Produse</a></li>
            <li><a href="#">Clientii despre noi</a></li>
            <li><a href="#">Contacte</a></li>
            <li><a href="chess.php">Chess</a></li>
        </ul>
    </header>
    <h1>Imaginile produselor</h1>
    <div class="fete">
        <?php
            $dir = 'images/';
            $files = scandir($dir);
            if($files != false) {
                for($i = 2; $i < count($files); $i++){
                    if ($files[$i] == '.' || $files[$i] == '..') continue;
                    $path = $dir.$files[$i];
                    echo "<a href='$path'><img src='$path' alt='imagine catelusi' /></a>";
                }
            }
        ?>
    </div>
    <footer>
        &copy; Toate drepturile rezervate
    </footer>
</body>
</html>
