<?php
$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";
?>

<html>
    <head>
        <link href="./style.css" rel="stylesheet">
    </head>

    <body>
        <img src="./monkey-business.jpg" class="banner">
        <h1>Select your monkey!</h1>
        <img src="./monkey_swings.png" class="line">
            <?php
            foreach ($apen as $aap) {
                echo "<a href=\"https://www.google.nl/search?q=" . $aap . "&tbm=isch\" target=\"_blank\">" . $aap . "</a>";
            }
            ?>
    </body>
</html>