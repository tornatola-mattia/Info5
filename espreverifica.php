<?php
    $auto = [
    ["marca" => "Fiat", "modello" => "500", "vendite" => 15],
    ["marca" => "BMW", "modello" => "Serie 1", "vendite" => 8],
    ["marca" => "Audi", "modello" => "A3", "vendite" => 12],
    ["marca" => "Mercedes", "modello" => "Classe A", "vendite" => 6],
    ["marca" => "Toyota", "modello" => "Yaris", "vendite" => 10]
];
?>

<!DOCTYPE html>
<html>

<head>

    <title>Automobili</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: white;
            width: 300px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px lightgray;
        }

        select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
        }

        #visualizza {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        #visualizza:hover {
            background-color: #0056b3;
        }

        img {
            margin: 5px;
        }

    </style>

</head>

<body>

    <h1>Automobili</h1>

    <form method="get">

        <select name="auto">

            <?php

            foreach($auto as $a){
                echo "<option value='".$a['marca']"'>".$a['marca']"</option>"
            }

            ?>

        </select>

        <button type="submit" id="visualizza">
            Visualizza
        </button>

    </form>


    <?php

    if(isset($_GET['auto'])){
        $autoScelta = $_GET['auto'];
        if($a['marca'] == $autoScelta)
            foreach($auto as $a){
        }
    }

    ?>

</body>

</html>