<?php
require 'dati.php';
?>

<?php 
print_r($dati);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vincite</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/6/w3.css">
</head>
<body class="w3-container">

    <?php 
        foreach($dati as $key => $info){
            echo $key. '-' .$info['nome']. '-' .$info['importo'].'<br>'. '-' .$info['citta'];
        }
    ?>

    <div>
        <table class="w3-table w3-striped">
            <tr>
              <th>Codice</th>
              <th>Nome</th>
              <th>Importo</th>
              <th>Città</th>
            </tr>

            <?php foreach($dati as $key => $info): ?>
            <tr>
              <td><?= $key ?></td>
              <td><?= $info['nome'] ?></td>
              <td><?= $info['importo'] ?></td>
              <td><?= $info['citta'] ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>