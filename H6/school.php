<style>
    body {
        display: grid;
        grid-template-columns: repeat(8, max-content);
    }
    p {
        margin: 0;
        padding-right: 20px;
        padding-left: 5px;
        border: 1px solid black;
    }
</style>

<?php
    $user = 'schoolUser';
    $pass = 'StrongPassword!1234';

    try {
        $dbh = new PDO('mysql:host=localhost;dbname=phpschool;port=3306', $user, $pass);
        foreach($dbh->query ('SELECT * from cursist') as $row) {
            echo "<p>".$row['cursistnr']."</p>";
            echo "<p>".$row['naam']."</p>";
            echo "<p>".$row['roepnaam']."</p>";
            echo "<p>".$row['straat']."</p>";
            echo "<p>".$row['postcode']."</p>";
            echo "<p>".$row['plaats']."</p>";
            echo "<p>".$row['geslacht']."</p>";
            echo "<p>".$row['geb_datum']."</p>";
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: ".$e->getMessage()."<br>";
        die();
    }
?>