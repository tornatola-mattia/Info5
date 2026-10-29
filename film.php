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
        <?php
        foreach ($film as $f) {
        ?>
            <div class="film w3-card w3-container">
                <img src="locandine/<?php echo $f['immagine']; ?>"
                     alt="Locandina di <?php echo $f['titolo']; ?>">

                <h2><?php echo $f['titolo']; ?></h2>
                <p><?php echo $f['anno']; ?></p>
            </div>
        <?php
        }
        ?>
    </main>

    <footer>
        <p>Progetto scolastico</p>
    </footer>
</body>
</html>