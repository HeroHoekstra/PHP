<style>
    img {margin-bottom: 2px;}
    img:nth-of-type(2n + 1) {border: 3px solid green;}
    img:nth-of-type(2n + 2) {border: 3px solid red;}
</style>

<?php
    for ($i = 1; $i <= 9; $i++) {
        echo "<img src='aap$i.jpg'>";
    }
?>