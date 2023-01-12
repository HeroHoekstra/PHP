<?php
    session_start();
    if ($_SESSION['roll'] == 'admin') {
        echo "<p>Welcome</p>";
    } else {
        echo "<p>Sorry, you're not an admin</p>";
    }

    echo "<a href=\"user.php\">Back</a>";
?>