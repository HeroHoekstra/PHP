<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voeg brood toe</title>
    </head>

    <body>
        <form action="./data/addData.php" method="post">
            Naam: <input type="text" name="name"> <br>
            Meel: <input type="text" name="flour"> <br>
            Vorm: <input type="text" name="form"> <br>
            Gewicht (g): <input type="number" name='weight'> <br>
            Prijs (€): <input type="number" step="any" name="price"> <br>
            <input type="submit" name="add" value="Voeg toe">
        </form>
    </body>
</html>