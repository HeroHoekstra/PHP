<?php
include('./data/getData.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bakkerij Wim Vlecht</title>

        <style>
            #broodjes {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 30px;
                margin: 30px;
            }

            .broodje {
                background-color: lightblue;
                height: max-content;
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <a href="addBread.php">Voeg brood toe</a>
        <a href="editBread.php">Verander brood</a>

        <div id="broodjes">
            <?php
            foreach ($dbh->query('SELECT * FROM broodje') as $item) {
                echo "<div class=\"broodje\">
                    <p>Naam: " . $item['Name'] . "</p>
                    <p>Meel: " . $item['Flour'] . "</p>
                    <p>Vorm: " . $item['Form'] . "</p>
                    <p>Gewicht: " . $item['Weight'] . "g</p>
                    <p>Prijs: €" . $item['Price'] . "</p>
                </div>
                ";
            }
            ?>
        </div>
    </body>
</html>