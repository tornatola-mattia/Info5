<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "palestra";
 
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//apre la comunicazione con il server
$sql = "SELECT * FROM atleta";// comando sql
$command = $conn->query($sql);// mi fa fare la query con il comando
$ris = $command->fetchAll(PDO::FETCH_OBJ);//crea la lista con i valori richiesti dalla query
var_dump($ris);
$conn = null;
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Elenco atleti</title>

    <link rel="stylesheet"
          href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        body {
            background-color: #f1f1f1;
        }

        .contenitore {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .atleta-card {
            width: 280px;
            background-color: white;
        }

        .avatar {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <header class="w3-container w3-blue w3-center">
        <h1>I nostri atleti</h1>
    </header>

    <div class="contenitore">

        <?php foreach ($ris as $atleta) { ?>

            <div class="w3-card-4 atleta-card">

                <?php if (!empty($atleta->avatar)) { ?>
                    <img
                        class="avatar"
                        src="immagini/<?= $atleta->avatar ?>"
                        alt="Foto atleta"
                    >
                <?php } ?>

                <div class="w3-container">
                    <h3>
                        <?= $atleta->nome ?>
                        <?= $atleta->cognome ?>
                    </h3>

                    <p>
                        <b>Disciplina:</b>
                        <?= $atleta->disciplina ?>
                    </p>

                    <p>
                        <b>Data di nascita:</b>
                        <?= $atleta->data_nascita ?>
                    </p>

                    <p>
                        <b>ID:</b>
                        <?= $atleta->id ?>
                    </p>
                </div>

            </div>

        <?php } ?>

    </div>

</body>
</html>