<style> 
    div {
        width: max-content;
        text-align: center;
    }
</style>

<body>
    <div>
        <?php
            for ($i = 0; $i < 10; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        ?>
    </div>
</body>