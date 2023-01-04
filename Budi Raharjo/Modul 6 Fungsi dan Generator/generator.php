<html>
<head>
    <title>Generator</title>
</head>
<h2>Membuat dan Menggunakan Generator</h2>
<body>

<?php
    function xrange($start, $limit, $steps=1): Generator
    {
        if ($start < $limit){
            if ($steps <= 0){
                echo "\$step harus bernilai positif <br>";
                exit();
            }
            for ($i=$start; $i<$limit; $i+=$steps){
                yield $i;
            }
        } else {
            if ($steps >= 0) {
                echo "\$step harus bernilai negatif <br>";
                exit();
            }
            for ($i = $start; $i > $limit; $i += $steps) {
                yield $i;
            }
        }

    }

    function iterator($generator): void
    {
        $temp = "[";
        foreach ($generator as $element){
            $temp .= strval($element) . ',';
        }
        $temp = substr($temp,0,strlen($temp)-1);
        echo $temp . "]";
    }

    $a = xrange(0, 11);
    echo "xrange(0,11): ";
    iterator($a);
    echo "<br>";

    $b = xrange(0, 11,2);
    echo "xrange(0,11,2): ";
    iterator($b);
    echo "<br>";

    $c = xrange(10,-1,-1);
    echo "xrange(10,-1,-1): ";
    iterator($c);
    echo "<br>";

    $d = xrange(10,-1,-2);
    echo "xrange(10,-1,-2): ";
    iterator($a);
    echo "<br>";
?>

</body>
</html>