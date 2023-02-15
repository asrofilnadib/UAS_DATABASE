<html>
    <head>
        <title>Operator Bitwise</title>
    </head>
    <body>
        <h2>Demo Operator Bitwise</h2>

        <?php
        $a = 24;
        $b = 17;
        echo "\$a = $a";
        echo "<br />\$b = $b";
        echo "<br />";
        echo "<br />\$a & \$b : " . ($a & $b);
        echo "<br />\$a | \$b : " . ($a | $b);
        echo "<br />\$a ^ \$b : " . ($a ^ $b);
        echo "<br />~\$a : " . (~$a);
        echo "<br />\$a >> 2 : " . ($a >> 2);
        echo "<br />\$a << 1 : " . ($a << 1);
        ?>
    </body>
</html>