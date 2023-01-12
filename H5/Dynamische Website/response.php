<?php
    if ($_POST['voornaam'] == "") {
        echo "Je moet nog je naam invullen!";
        echo "<br><a href=\"index.html\">Terug naar het formulier</a><br>";
    }
    if ($_POST['adres'] == "") {
        echo "Je moet nog je adres invullen!";
        echo "<br><a href=\"index.html\">Terug naar het formulier</a><br>";
    }
    if ($_POST['email'] == "") {
        echo "Je moet nog je email invullen!";
        echo "<br><a href=\"index.html\">Terug naar het formulier</a><br>";
    }
    if ($_POST['wachtwoord'] == "") {
        echo "Je moet nog je wachtwoord invullen!";
        echo "<br><a href=\"index.html\">Terug naar het formulier</a><br>";
    } 
    print_r($_POST);
?>