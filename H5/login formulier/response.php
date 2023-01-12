<?php
    $vals = [
        "piet@worldonline.nl" => "doetje123",
        "klaas@carpets.nl" => "snoepje777",
        "truushendriks@wegweg.nl" => "arkiearkie201"
    ];

    if ($vals[$_POST['email']] == $_POST['wachtwoord']) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang";
    }
?>