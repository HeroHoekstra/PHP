<?php
    $user = 'login_user';
    $pass = 'EenGoedWachtwoord';

    try {
        //connect to database
        $dbh = new PDO('mysql:host=localhost;dbname=userlogin;port=3306', $user, $pass);
        
        $loginSuccess = false;

        //user login
        foreach ($dbh->query('SELECT * FROM userLogin') as $row) {
            if ($_POST['email'] == $row['email']) {
                if ($_POST['pass'] == $row['pass']) {
                    header("Location: user.php");
                    session_start(); 
                    $loginSuccess = true;
                    $_SESSION['roll'] = 'user';
                }
            }
        }

        //admin login
        foreach ($dbh->query('SELECT * FROM adminlogin') as $row) {
            if ($_POST['email'] == $row['email']) {
                if ($_POST['pass'] == $row['pas']) {
                    header("Location: user.php");
                    session_start(); 
                    $loginSuccess = true;
                    $_SESSION['roll'] = 'admin';
                }
            }
        }

        if (!$loginSuccess) {
            header('Location: index.php');
        }

        $dbh = null;
    } catch (PDOException $e) {
        echo "ERROR: ".$e->getMessage()."<br>";
    }
?>