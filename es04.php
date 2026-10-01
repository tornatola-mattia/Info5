<?php
    $elenco = [1 => ['nome' => 'Agazzi Federico', 'anno' => 2008, 'colore' => 'red', 'materia' => 'Geografia', 'sport' => 'calcio', 'img' => 'azz.png'], 2 => ['nome' => 'Azzolari Emilio', 'anno' => 2008, 'colore' => 'red', 'materia' => 'Geografia', 'sport' => 'calcio', 'img' => 'azz.png'], 3 => ['nome' => 'Coumba Ba', 'anno' => 2008, 'colore' => 'red', 'materia' => 'Geografia', 'sport' => 'calcio', 'img' => 'azz.png']];

    $studente = ['nome' => 'Doe John','anno' => 2010,'colore' => 'black','materia' => 'Matematica','sport' => 'Basket','img' => 'azz.png'];

    if(isset($_GET['nelenco'])){
        if(array_key_exists($_GET['nelenco'], $elenco)){
            $studente = $elenco[$_GET['nelenco']];
            echo 'ho tutto';
        }else{
            echo 'qualcuno sta cercando di forzare i parametri';
        }
    }else{
        echo 'Studente inesistente';
    }
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe 5AI</title>
</head>
<body>

    <div class="w3-panel">
        <form action="" method="get" class="w3-container w3-light-grey">
            <h2>Classe 5AI</h2>

            <p>Scegli il tuo studente preferito</p>

            <select name="nelenco">
                <option value="1">Agazzi Federico</option>
                <option value="2">Azzolari Emilio</option>
                <option value="3">Coumba Ba</option>
                <option value="4">John doe</option>
            </select>

            <button type="submit" class="w3-btn w3-hover-red w3-blue-grey">Visualizza</button>
        </form>
    </div>

    <br>

    <?php
        echo 'Nome: '.$studente['nome'];
        echo '<br>'; 
        echo 'Colore preferito: '.$studente['colore'];
        echo '<br>'; 
        echo 'Anno di nascita: '.$studente['anno'];
        echo '<br>'; 
        echo 'Materia preferita: '.$studente['anno'];
        echo '<br>'; 
        echo 'Sport preferio: '.$studente['sport'];
        echo '<br>'; 
    ?>

    <div class="w3-panel w3-border-red">
        <div class="w3-container">
            <hr>

            <img src="./imgs/<?= $studente['img'] ?>" alt="Avatar" class="w3-left w3-circle">

        </div>
    </div>

</body>
</html>