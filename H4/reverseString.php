<form name="string" action="" method="get">
    <input type="text" name="string" id="string">
</form>

<?php
    $reverseString = strrev($_GET['string']);

    echo $reverseString;
?>