<!-- aggiorna solo il parametro scansionato o no e cambia il valore da false a true -->

<?php
    print_r($_POST);

    $scansionato = false;
    try{
        $connessione = new PDO('mysql:host=localhost;dbname=concorsi','root','');

        $stm = $connessione->prepare("UPDATE bevi_e_vinci SET scansionato = :s WHERE codice = :c");
        $stm->bindParam(":c", $_POST['cod']);
        $stm->bindParam(":s", $_POST['scansionato']);
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
    <title>Aggiornamento scansionato</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/6/w3.css">
</head>
<body>

<div class="w3-container w3-blue-gray">
    <h1>Aggiornamento scansionato</h1>
</div>
    
    <form class="w3-container" action="aggiorna.php" method="post">
    Numero codice
    <input class="w3-input w3-border" type="text" name="cod" ><br>
    Scansionato
    <input class="w3-check" type="checkbox" name="scansionato" value="1"><br><br>
    <input class="w3-button w3-blue-gray" type="submit" value="Aggiorna premio"><br><br>

    
    <?php if($righe == 1): ?>
        Aggiornamento avvenuto
    <?php else: ?>
        Errore durante l'aggiornamento
    <?php endif ?>
</body>
</html>