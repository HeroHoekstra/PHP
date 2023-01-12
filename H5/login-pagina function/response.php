<?php
    function checkAccess() {
        $vals = [
            "piet@worldonline.nl" => "doetje123",
            "klaas@carpets.nl" => "snoepje777",
            "truushendriks@wegweg.nl" => "arkiearkie201"
        ];

        if ($vals[$_POST['email']] == $_POST['wachtwoord']) {
            return true;
        }
    }

    if (checkAccess()) {
        echo "Welkom";
    } else {
        echo "Sorry, geen toegang";
    }
?>