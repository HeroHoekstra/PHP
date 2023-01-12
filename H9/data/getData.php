<?php
$user = "bakker";
$pass = "GangsterBakker";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=bakker;port=3306', $user, $pass);
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage() . "<br>";
}
?>