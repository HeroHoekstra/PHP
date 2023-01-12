<?php include('./data/getData.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verander brood toe</title>
    </head>

    <body>
        <p>Alles dat niet wordt aangepast blijft het zelfde</p>
        <form action="./data/addData.php" method="post">
        <select name="bread">
            <?php
            foreach ($dbh->query('SELECT * FROM broodje') as $name) {
                echo "<option value='" . $name['Name'] . "'>" . $name['Name'] . "</option>";
            }
            ?>
        </select> <br>

            Naam: <input type="text" name="Name"> <br>
            Meel: <input type="text" name="Flour"> <br>
            Vorm: <input type="text" name="Form"> <br>
            Gewicht (g): <input type="number" name='Weight'> <br>
            Prijs (€): <input type="number" step="any" name="Price"> <br>

            <input type="submit" name="edit" value="Verander">
            <br><br><br><br>
            <p>Je wordt niet gewaarschuwd als je iets verwijdert</p>
            <input type="submit" name="delete" value="Verwijder">
        </form>
    </body>
</html>