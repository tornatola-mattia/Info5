<?php
    print_r($_POST);

    $scansionato = false;
    try{
        $connessione = new PDO('mysql:host=localhost;dbname=concorsi','root','');

        $stm = $connessione->prepare("SELECT * FROM bevi_e_vinci WHERE codice = :c");
        $stm->bindParam(":c", $_POST['cod']);
        $stm->execute();
        $righe = $stm->rowCount();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
    }catch (Exception $err){
        $righe = 0;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($righe > 0): ?>
        <?php if ($result['scansionato'] == 1): ?>
            <h1>Hai già scannerizzato questo codice</h1>
        <?php else: ?>
            <h1>Hai vinto <?php echo $result['premio']; ?> euro</h1>
        <?php endif; ?>
    <?php else: ?>
        <h1>Codice non valido</h1>
    <?php endif; ?>
</body>
</html>