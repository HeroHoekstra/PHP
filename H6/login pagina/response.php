<?php
    $user = 'login';
    $pass = 'StrongPassword!1234';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=login;port=3306', $user, $pass);
        $success = false;

        foreach($dbh->query ('SELECT * from userLoginData') as $row) {
            if ($_POST['email'] == $row['email']) {
                if ($_POST['pass'] == $row['pass']) {
                    $success = true;
                }
            }
        } 

        if ($success) {
            echo "Welkom";
        } else {
            echo "Sorry, geen toegang";
        }

        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: ".$e->getMessage()."<br>";
        die();
    }
?>