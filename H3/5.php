<?php
    $leeftijd = 12;
    $prijs = 10;

    if ($leeftijd < 3) {
        $prijs = 0;
    } else if ($leeftijd <= 12) {
        $prijs /= 2;
    } else if ($leeftijd > 65) {
        $prijs /= 2;
    }

    echo $prijs;
?>