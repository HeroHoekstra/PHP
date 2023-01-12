<?php
include('lib.php');

if (!isset($_COOKIE['auto'])) {
    header("Refresh:0");
}

$newCar = unserialize($_COOKIE['auto']);

if (isset($_GET['brand']) && $_GET['brand'] != 'dont-brand') {
    $newCar = array_filter($newCar, function ($brand) {
        return (isset($_GET['brand']) && $brand->brand == $_GET['brand']);
    });
} else {
    $newCar = unserialize($_COOKIE['auto']);
}

if (isset($_GET['price'])) {
    if ($_GET['price'] == "low-to-high") {
        usort($newCar, function ($a, $b) {
            return $a->price - $b->price;
        });
    } else if ($_GET['price'] == "high-to-low") {
        usort($newCar, function ($a, $b) {
            return $b->price - $a->price;
        });
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Mr Wheely</title>

        <style>
            .cars {
                margin: 30px;

                display: grid;
                grid-template-columns: repeat(5, auto);
                gap: 50px;
            }

            .car {
                background-color: lightblue;
                padding: 10px;
            }
        </style>
    </head>

    <body>
        <div class="sort">
            <p>Sort by: <?php
            function msg() {
                if (!isset($_GET['brand'])) {
                    return "You are not sorting with anything";
                } else {
                    return "Brand: " . $_GET['brand'] . " Price: " . $_GET['price'] . "";
                }
            }
            echo "<span>" . msg() . "</span>";
            ?></p>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            Brand: 
                <select name="brand">
                    <option value="dont-brand" <?php if (isset($_GET['brand']) && $_GET['brand'] === 'dont-brand') echo 'selected'; ?>>Don't sort</option>
                    <?php
                    $getBrand = new carData();
                    foreach($getBrand->brand as $brand) {
                        echo '<option value="'.$brand.'"';
                        if (isset($_GET['brand']) && $_GET['brand'] === $brand) {
                            echo ' selected';
                        }
                        echo '>'.$brand.'</option>';
                    }
                    ?>
                </select>

                Price:
                <select name="price">
                    <option value="low-to-high" <?php if (isset($_GET['price']) && $_GET['price'] === 'low-to-high') echo 'selected'; ?>>Low to High</option>
                    <option value="high-to-low" <?php if (isset($_GET['price']) && $_GET['price'] === 'high-to-low') echo 'selected'; ?>>High to Low</option>
                </select>

                <input type="submit" value="submit">
            </form>
        </div>

        <div class="cars">
            <?php
            foreach ($newCar as $car) {
                echo "
                    <div class = 'car'>
                        <p>Price: " . $car->price . "</p>
                        <p>Brand: " . $car->brand . "</p>
                        <p>Type: " . $car->type . "</p>
                    </div>
                ";
            }
            ?>
        </div>
    </body>
</html>