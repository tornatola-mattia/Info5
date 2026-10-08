<?php

    $errore = "codice mancante";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/6/w3.css">
    <style>
        .debug{
            background-color: black;
            color: green;
            border: solid 2px grey;
            width: 100%;
            height: 100px;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>

    <div class="debug w3-hide">
        <?= $errore ?>
    </div>

    <?php if($errore == "noerror"): ?>
        <div class="w3-panel w3-blue">
            <p>London is the capital of England</p>
        </div>

    <?php else: ?>
        <div class="w3-panel w3-danger">
            <h3>Danger!</h3>
            <p><?= $errore ?></p>
            <p>Something wnet wrong: please try again.</p>
        </div>

    <?php endif; ?>
</body>
</html>