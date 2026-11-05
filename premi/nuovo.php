<?php
    print_r($_POST);

    $scansionato = false;
    try{
        $connessione = new PDO('mysql:host=localhost;dbname=concorsi','root','');

        $stm = $connessione->prepare("INSERT INTO bevi_e_vinci (codice, premio, scansionato)
        VALUES (:c, :p, :s)");
        $stm->bindParam(":c", $_POST['cod']);
        $stm->bindParam(":p", $_POST['money']);
        $stm->bindParam(":s", $scansionato);
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
    <title>Inserimento concorso</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/6/w3.css">
</head>
<body>

<div class="w3-container w3-blue-gray">
    <h1 class="w3.school">Inserimento concorso</h1>
</div>
    
<form class="w3-container" action="inserimento.php" method="post">
    Codice 
    <input class="w3-input w3-border w3-sand" type="text" name="cod"><br>
    Importo vincita
    <input class="w3-input w3-border w3-sand" type="number" name="money"><br>

    <input class="w3-btn w3-blue-gray" type="submit" value="Inserisci premio">
    
</form>

    <?php if($righe == 1): ?>
        Inserimento avvenuto
    <?php else: ?>
        Errore durante l'inserimento
    <?php endif ?>

</body>
</html>