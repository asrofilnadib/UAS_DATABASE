<html lang="">
    <head>
        <title>Operator Kondisional</title>
    </head>
    <body>
        <h2>Demo Operator Kondisional (?:)</h2>
        <?php
        function Absolute($x) {
            $abc = ($x < 0) ? -$x : $x;
            return $abc;
        }

        $a = -5;
        $b = -10;
        $c = 15;

        echo "\$a = " . $a . "<br>";
        echo "\$b = " . $b . "<br />";
        echo "\$c = " . $c . "<br><br>";
        echo "Absolute(\$a) = " . Absolute($a) . "<br>";
        echo "Absolute(\$b) = " . Absolute($b) . "<br>";
        echo "Absolute(\$c) = " . Absolute($c) . "<br>";
        ?>
    </body>
</html>