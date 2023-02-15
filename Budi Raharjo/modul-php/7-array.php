<html>
    <head>
        <title>Operator Array</title>
    </head>
    <body>
        <h2>Demo Operator Array</h2>

        <?php
        $arr1 = ['satu'=>10, 'dua'=>20, 'tiga'=>30];
        $arr2 = ['empat'=>40, 'satu'=>70, 'lima'=>50];
        $arr3 = ['dua'=>20, 'tiga'=>30, 'satu'=>10];
        $arr4 = ['satu'=>10, 'dua'=>20, 'tiga'=>30];

        echo "\$arr1 : "; print_r($arr1); echo "<br />";
        echo "\$arr2 : "; print_r($arr2); echo "<br />";
        echo "\$arr3 : "; print_r($arr3); echo "<br />";
        echo "\$arr4 : "; print_r($arr4); echo "<br />";

        $arr5 = $arr1 + $arr2;

        echo "\$arr5 : "; print_r($arr5); echo "<br><br />";

        echo "\$arr1 == \$arr3 : " . ($arr1 == $arr3);
        echo "<br>\$arr1 === \$arr3 : " . ($arr1 === $arr3);
        echo "<br>\$arr1 !== \$arr3 : " . ($arr1 !== $arr3);
        echo "<br>\$arr1 === \$arr4 : " . ($arr1 === $arr4);
        ?>
    </body>
</html>