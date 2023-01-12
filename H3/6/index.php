<style>
    .container {
        display: grid;
        grid-template-columns: repeat(3, max-content);
    }

    .containerChild {
        border: 1px solid black;
        border-right: none;
        padding-right: 15px;
        padding-left: 5px;
    }

    .containerChild > p {
        margin: 3px;
    }

    img {
        height: 18px;
        width: auto;
        margin: 1.5px 0 1.5px 0;
    }
</style>

<?php
        $naam = ["De spartelkuikens", "De waterbuffels", "Plonsmderin", "Bommetje"];
        $aantal = [25, 31, 11, 23];
?>

<div class="container">
    <div class="containerChild">
        <?php
            for ($i = 0; $i < count($naam); $i++) {
                echo "<p>$naam[$i]</p>";
            }
        ?>
    </div>

    <div class="containerChild">
        <?php
            for ($i = 0; $i < count($aantal); $i++) {
                echo "<p>$aantal[$i]</p>";
            }
        ?>
    </div>

    <div class="containerChild" style="border-right: 1px solid black">
        <?php
            for ($i = 0; $i < count($aantal); $i++) {
                for ($j = 1; $j <= $aantal[$i] / 5; $j++) {
                    echo "<img src=\"swim.jpg\">";
                }
                echo "<br>";
            }
        ?>
    </div>
</div>