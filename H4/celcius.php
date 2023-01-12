<form name="celcius" action="" method="get">
    <input type="text" name="celcius" id="celcius">
</form>

<?php
    function CtoF() {
        $F = (9/5) * (int)$_GET['celcius'] + 32;

        return $F; 
    }

    echo CtoF()." Fahrenheit";
?>