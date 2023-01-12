<form name="number" action="" method="get">
    <input type="text" name="number" id="number">
</form>

<?php
    function devideBy3() {
        $isTrue = false;
        if ((int)$_GET['number'] % 3 == 0) {
            $isTrue = true;
        }
        return $isTrue;
    }

    if (devideBy3()) {
        echo $_GET['number']." is divisible by 3";
    } else {
        echo $_GET['number']." is not divisible by 3";
    }
?>