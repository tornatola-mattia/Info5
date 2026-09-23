<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es02</title>
</head>
<body>

    <div>
        <?php 
        $colore = 'verde';
        switch($colore){
        case 'giallo' : echo '<span style="color:yellow">';break;
        case 'verde' : echo '<span style="color:green">';break;
        case 'blu' : echo '<span style="color:blu">';break;
        case 'rosso' : echo '<span style="color:red">';break;
        default: echo '<span style="color:grey">';break;
        }
        ?>
        <p>Bronto, bizzeria grande biramide diegitto</p>
    </div>
    
</body>
</html>