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
        "SELECT * FROM mondiali"
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