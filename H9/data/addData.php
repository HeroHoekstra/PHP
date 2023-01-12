<?php
include('getData.php');

header("Location: ../index.php");

if (isset($_POST['add'])) {
    $item1 = $_POST['name'];
    $item2 = $_POST['flour'];
    $item3 = $_POST['form'];
    $item4 = $_POST['weight'];
    $item5 = $_POST['price'];

    $query = "INSERT INTO broodje (Name, Flour, Form, Weight, Price) VALUES ('$item1', '$item2', '$item3', '$item4', '$item5')";

    $dbh->exec($query);
} else if (isset($_POST['edit'])) {
    foreach ($_POST as $key => $item) {
        if ($item != "" && $item != "Verander") {
            $query = "UPDATE `broodje` SET `" . $key . "`='" . $item . "' WHERE Name = '" .$_POST['bread']."'";
            $dbh->exec($query);
        }
    }
} else if (isset($_POST['delete'])) {
    $query = "DELETE FROM `broodje` WHERE Name = '" . $_POST['bread'] . "'";
    $dbh->exec($query);
}

exit();
?>