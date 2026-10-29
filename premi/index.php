<?php

$errore = "";
$risultato = [];
$statistiche = [];

try {

    $connessione = new PDO(
        "mysql:host=localhost;dbname=concorsi;charset=utf8mb4",
        "root",
        ""
    );

    $connessione->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Tabella principale
    $query = $connessione->query(
        "SELECT * FROM bevi_e_vinci"
    );

    $risultato = $query->fetchAll(PDO::FETCH_ASSOC);

    // Statistiche città
    $query2 = $connessione->query(
        "SELECT citta, SUM(premio) AS totale_premi
         FROM bevi_e_vinci
         GROUP BY citta
         ORDER BY totale_premi DESC"
    );

    $statistiche = $query2->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $ex) {

    $errore = $ex->getMessage();

}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Bevi e Vinci</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
</head>

<body class="w3-light-grey">

<header class="w3-container w3-theme-d5 w3-padding">
    <h1>Bevi e Vinci</h1>
</header>

<div class="w3-container w3-padding">

    <h2>Elenco Codici</h2>

    <table class="w3-table-all w3-card-4">

        <?php

        if ($errore != "") {

            echo "<tr>";
            echo "<td>Errore: $errore</td>";
            echo "</tr>";

        } elseif (count($risultato) == 0) {

            echo "<tr>";
            echo "<td>Nessun dato trovato.</td>";
            echo "</tr>";

        } else {

            echo "<tr class='w3-theme'>";

            foreach ($risultato[0] as $chiave => $valore) {
                echo "<th>$chiave</th>";
            }

            echo "</tr>";

            foreach ($risultato as $riga) {

                echo "<tr>";

                foreach ($riga as $valore) {
                    echo "<td>$valore</td>";
                }

                echo "</tr>";
            }
        }

        ?>

    </table>

    <br><br>

    <h2>Classifica città più fortunate</h2>

    <table class="w3-table-all w3-card-4">

        <tr class="w3-theme">
            <th>Città</th>
            <th>Totale premi (€)</th>
        </tr>

        <?php

        foreach($statistiche as $riga){

            echo "<tr>";
            echo "<td>".$riga['citta']."</td>";
            echo "<td>".$riga['totale_premi']."</td>";
            echo "</tr>";

        }

        ?>

    </table>

</div>

</body>
</html>