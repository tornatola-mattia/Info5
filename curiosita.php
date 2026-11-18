
<?php 
    // Connessione al database
    $conn = new mysqli("localhost", "root", "", "mondiali");

    if ($conn->connect_error) {
        die("Errore di connessione: " . $conn->connect_error);
    }

    // 1. Squadre iscritte ai mondiali
    $sql1 = "SELECT COUNT(*) AS totale FROM squadre";

    $ris1 = $conn->query($sql1);
    $riga1 = $ris1->fetch_assoc();
    $squadre = $riga1['totale'];

    // 2. Nazionali con più di 9 difensori
    $sql2 = "SELECT nazionale, COUNT(*) AS totale
             FROM giocatori
             WHERE ruolo = 'Difensore'
             GROUP BY nazionale
             HAVING COUNT(*) > 9";

    $ris2 = $conn->query($sql2);
    $nazionali = [];

    while ($riga2 = $ris2->fetch_assoc()) {
        $nazionali[] = $riga2['nazionale'];
    }

    // 3. I 5 club con più giocatori
    $sql3 = "SELECT club, COUNT(*) AS totale
             FROM giocatori
             GROUP BY club
             ORDER BY totale DESC
             LIMIT 5";

    $ris3 = $conn->query($sql3);
    $club = [];

    while ($riga3 = $ris3->fetch_assoc()) {
        $club[] = $riga3['club'] . " (" . $riga3['totale'] . ")";
    }

    // 4. Partite vinte dalla squadra ospite
    $sql4 = "SELECT COUNT(*) AS totale
             FROM partite
             WHERE gol_ospite > gol_casa";

    $ris4 = $conn->query($sql4);
    $riga4 = $ris4->fetch_assoc();
    $vittorieOspite = $riga4['totale'];

    // 5. Probabilità di vittoria della squadra ospite
    $sql5 = "SELECT COUNT(*) AS totale FROM partite";

    $ris5 = $conn->query($sql5);
    $riga5 = $ris5->fetch_assoc();
    $totalePartite = $riga5['totale'];

    if ($totalePartite > 0) {
        $probabilita = round(($vittorieOspite / $totalePartite) * 100, 2);
    } else {
        $probabilita = 0;
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondiali</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/6/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css" integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

    <div class="w3-container w3-blue">
        <h2><i class="fa-solid fa-futbol"></i> Mondiali</h2>
        <p>Curiosità sui mondiali.</p>
    </div>

    <div class="w3-bar w3-indigo">
        <a href="#" class="w3-bar-item w3-button w3-mobile"><i class="fa-regular fa-house"></i>Home</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile">Inserisci</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile">Modifica</a>
        <a href="#" class="w3-bar-item w3-button w3-mobile">Cancella</a>
    </div>

    <div class="w3-container">
        <div class="w3-third">
            <div class="w3-card w3-panel w3-margin">
                <h2><i class="fa-solid fa-calculator"></i><?php echo $squadre; ?></h2>
                <p>Squadre iscritte ai mondiali.</p>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-panel w3-margin">
                <h2><i class="fa-solid fa-calculator"></i><?php echo implode(", ", $nazionali); ?></h2>
                <p>Le nazionali che hanno portato più di 9 difensori al mondiale.</p>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-panel w3-margin">
                <h2><i class="fa-solid fa-calculator"></i><?php echo implode(", ", $club); ?></h2>
                <p>Le 5 squadre di club che hanno portato più giocatori al mondiale.</p>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-panel w3-margin">
                <h2><i class="fa-solid fa-calculator"></i><?php echo $vittorieOspite; ?></h2>
                <p>Il numero di partite in cui ha vinto la squadra ospite.</p>
            </div>
        </div>

        <div class="w3-third">
            <div class="w3-card w3-panel w3-margin">
                <h2><i class="fa-solid fa-calculator"></i><?php echo $probabilita; ?>%</h2>
                <p>La probabilità di vincitadella squadra ospite.</p>
            </div>
        </div>



    </div>


    <div class="w3-container w3-light-gray">
        <h5><i class="fa-solid fa-info"></i> 5Ai - Dalmine 2026</h5>
        <p>Pagina a cura di nome cognome.</p>
    </div>
</body>

</html>
