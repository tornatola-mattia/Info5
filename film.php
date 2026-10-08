<?php
require 'dati1.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le mie locandine</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eee;
            color: #222;
            margin: 0;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        main {
            max-width: 1000px;
            margin: 25px auto;
            padding: 0 15px;
            text-align: center;
        }

        .film img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            background-color: #ddd;
        }

        .film h2 {
            font-size: 18px;
        }

        footer {
            text-align: center;
            padding: 15px;
            color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Le mie locandine</h1>
        <p>Una raccolta di film recenti</p>
    </header>

    <main>
        <div class="class=w3-card w3-container">
            <img src="locandine/inside_out_2.jpg" alt="Locandina di Inside Out 2">
            <h2>Inside Out 2</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/deadpool_wolverine.jpg" alt="Locandina di Deadpool &amp; Wolverine">
            <h2></h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/wicked.jpg" alt="Locandina di Wicked">
            <h2>Wicked</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/moana_2.jpg" alt="Locandina di Moana 2">
            <h2>Moana 2</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/despicable_me_4.jpg" alt="Locandina di Despicable Me 4">
            <h2>Despicable Me 4</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/beetlejuice_beetlejuice.jpg" alt="Locandina di Beetlejuice Beetlejuice">
            <h2>Beetlejuice Beetlejuice</h2>
            <p>2024</p>
        </div>

        <div class=class="w3-card w3-container">
            <img src="locandine/dune_part_two.jpg" alt="Locandina di Dune: Part Two">
            <h2>Dune: Part Two</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/twisters.jpg" alt="Locandina di Twisters">
            <h2>Twisters</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/mufasa_the_lion_king.jpg" alt="Locandina di Mufasa: The Lion King">
            <h2>Mufasa: The Lion King</h2>
            <p>2024</p>
        </div>

        <div class="class=w3-card w3-container">
            <img src="locandine/sonic_the_hedgehog_3.jpg" alt="Locandina di Sonic the Hedgehog 3">
            <h2>Sonic the Hedgehog 3</h2>
            <p>2024</p>
        </div>
    </main>

    <footer>
        <p>Progetto scolastico</p>
    </footer>
</body>
</html>