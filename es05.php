<?php
$scudetti = [
    ["nome" => "Atalanta", "numero" => 0],
    ["nome" => "Inter", "numero" => 21],
    ["nome" => "Juventus", "numero" => 36],
    ["nome" => "Milan", "numero" => 19],
    ["nome" => "Napoli", "numero" => 4]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Scudetti</title>
</head>
<style>
    body{
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    margin-top: 50px;
    }
    
    h1{
    color: #333;
    }
    
    form{
    background-color: white;
    width: 300px;
    margin: auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px lightgray;
    }
    
    select{
    width: 100%;
    padding: 8px;
    margin: 10px 0;
    }
    
    #visualizza{
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    }
</style>
<body>

<h1>Squadre di calcio</h1>

<form method="get">
    <select name="nsquadra">
        <?php
        foreach($scudetti as $sq){
            echo "<option value='".$sq['nome']."'>".$sq['nome']."</option>";
        }
        ?>
    </select>

    <button type="submit" id="visualizza">Visualizza</button>
</form>

<?php

if(isset($_GET['nsquadra'])){

    $squadraScelta = $_GET['nsquadra'];

    foreach($scudetti as $sq){

        if($sq['nome'] == $squadraScelta){

            echo "<h2>".$sq['nome']."</h2>";
            echo "<p>Scudetti: ".$sq['numero']."</p>";

            for($i=0; $i<$sq['numero']; $i++){
                echo "<img src='imgs\scudetto.jpg' width='40'>";
            }
        }

    }

}

?>

</body>
</html>