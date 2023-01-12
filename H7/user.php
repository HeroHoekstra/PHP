<?php
    session_start();

    print_r($_SESSION);
    function logOut() {
        if (isset($_POST['logOut'])) {
            session_destroy();
            header('Location: index.php');
        }
        
    }
    
    function adminPanel() {
        if (isset($_POST['adminPanel'])) {
            header('Location: adminPanel.php');
        }
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="<?php logOut()?>" method="post">
            <input type="submit" name="logOut" value="Log out">
        </form>

        <a href="adminPanel.php">admin panel</a>
    </body>
</html>