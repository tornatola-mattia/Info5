<?php
    require 'phpqrcode/qrlib.php';
    $text = "http://172.22.20.90/QuintaAi/controllo.php?cod=BV1235";
    
    // Indica dove collocare le immagini generate.
    $path = 'qrimages/';

	// Nome predefinito per l'immagine.
	//$file = $path . "codice001.png";

    // Genera un nome unico per ogni immagine basato su microtime.
    //$file = $path.uniqid().".png";

    $file = $path."codice01.png";
  
    // Robustezza agli errori ('L', 'M', 'H').
    $ecc = 'H';
    $pixel_Size = 8;
    $frame_Size = 4;

    // Genera il QR Code e lo memorizza nella cartella indicata.
    QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size);

    // Mostra l'immagine del QR code.
    echo "<img src='".$file."'>";
?>