<?php
    $score = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/style_index.css">
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title> MathGame </title>
</head>

<body>

    <div class="home">
        <img src="media/icon-logo.png" alt="game_logo">
        <h1> MathGame! </h1>
    </div>

    <section class="options">

        <h1> Choose difficulty: </h1>

        <ul>
            <li><a href="/game.php?d=e&s=<?=$score?>"> Easy </a></li>
            <li><a href="/game.php?d=m&s=<?=$score?>"> Medium </a></li>
            <li><a href="/game.php?d=h&s=<?=$score?>"> Hard </a></li>
        </ul>

    </section>

</body>

</html>