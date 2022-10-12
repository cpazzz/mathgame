<?php

    $value_1 = $_GET['v1'];
    $value_2 = $_GET['v2'];
    $operation_value = $_GET['op'];
    $score = $_GET['s'];
    $difficulty = $_GET['d'];
    $answer_user = $_POST['resp'];

    if ($operation_value == 1) {

        $result = $value_1 + $value_2;

    } else if ($operation_value == 2) {

        $result = $value_1 - $value_2;

    } else if ($operation_value == 3) {

        $result = $value_1 * $value_2;

    } else {

        $result = $value_1 / $value_2;

    }

    $win = $result == $answer_user;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styles/style_result.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <title> MathGame </title>
</head>

<body>

    <?php if($win) { $score = $score + 1; ?>

    <div class="result">

        <img class="logo" src="media/icon-correct.png" alt="icon_victory">
        <h1> Nice! </h1>
        <h3> Score: <?=$score?> </h3>
        <a href="/game.php?s=<?=$score?>&d=<?=$difficulty?>"> Next > </a>

    </div>

    <?php } else { ?>

    <div class="result">

        <img src="media/icon-defeat.png" alt="icon_defeat">
        <h1> So close, the answer was <?=$result?> </h1>
        <h3> Score: <?=$score?> </h3>
        <a href="/"> Game over... </a>

    </div>

    <?php } ?>

</body>

</html>