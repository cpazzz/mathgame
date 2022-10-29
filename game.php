<?php
    $difficulty = $_GET['d'];
    $score = $_GET['s'];
    $operation_value = rand(1, 4);

    switch ($operation_value) {
        case 1 : $operation = '+';
        break;
        case 2 : $operation = '-';
        break;
        case 3 : $operation = 'x';
        break;
        default : $operation = '/';
    }

    if ($difficulty == 'e') {
        $value_1 = rand(1, 35);
        $value_2 = rand(1, 10);
    } else if ($difficulty == 'm') {
        $value_1 = rand(1, 90);
        $value_2 = rand(1, 35);
    } else {
        $value_1 = rand(1, 150);
        $value_2 = rand(1, 50);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/style_game.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title> MathGame </title>
</head>

<body>
    
    <div id="game_container">
        <h1> How much is? </h1>
        <div id="game_values">
            <h2><?=$value_1?></h2>
            <h2><?=$operation?></h2>
            <h2><?=$value_2?></h2>
        </div>

        <div id="game_answer">
            <form id="forms" method="POST" action="/result.php?v1=<?=$value_1?>&v2=<?=$value_2?>&op=<?=$operation_value?>&d=<?=$difficulty?>&s=<?=$score?>">
                <input type="text" name="resp">
                <button type="submit"> Submit </button>
            </form>
        </div>
    </div>

</body>
</html>