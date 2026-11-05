<?php
    print_r($_POST);

    $scansionato = false;
    try{
        $connessione = new PDO('mysql:host=localhost;dbname=concorsi','root','');

        $stm = $connessione->prepare("DELETE FROM bevi_e_vinci WHERE codice = :c");
        $stm->bindParam(":c", $_POST['cod']);
        $stm->execute();
        $righe = $stm->rowCount();
    }catch (Exception $err){
        $righe = 0;
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Cancellazione</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/6/w3.css">
</head>
<body>
    <div class="w3-container w3-blue-gray">
        <h1 class="w3.school">Conferma Cancellazione</h1>
    </div>
    
    <form class="w3-container" action="cancellazione.php" method="post">
    Numero codice
    <input class="w3-input w3-border w3-sand" type="text" name="cod"><br>
    <input class="w3-btn w3-blue-gray" type="submit" value="Cancella premio"><br><br>
    
    <?php if($righe == 1): ?>
        Cancellazione avvenuta
    <?php else: ?>
        Errore durante la cancellazione
    <?php endif ?>

</body>
</html>