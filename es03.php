<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colore preferito</title>
<style>
    .red {
        color: red;
    }

    .blue {
        color: blue;
    }

    .green {
        color: green;
    }

    .small {
        font-size: 12px;
    }

    .medium {
        font-size: 20px;
    }

    .large {
        font-size: 30px;
    }
</style>
</head>
<body>
    <div>
        <?php
        

            $colore = 'red';
            $dimensione = 'large';
            
            if(isset($_GET['colore'])){
                $colore = $_GET['colore'];
            }

            if(isset($_GET['dimensione'])){
                $dimensione = $_GET['dimensione'];
            }
        ?>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis provident impedit et vel recusandae corporis dolorum fugiat nemo inventore, non vero rerum eveniet quo maxime, saepe enim facilis, asperiores ipsum?</p>
        
    </div>
</body>
</html>