<html>
<head>
    <title>
        Parameter Dinamis
    </title>
</head>
<h2>variabel-length argument</h2>
<body>

<?php
    function sum(...$data){
        $total = 0;
        foreach ($data as $nilai){
            $total += $nilai;
        }
        return $total;
    }

    function avg(...$data){
        $total = 0;
        foreach ($data as $nilai){
            $total += $nilai;
        }
        return $total / sizeof($data);
    }

    echo "Memanggil fungsi sum dan avg dengan 4 argumen<br>";
    echo "sum(1,2,3,4) = " . sum(1,2,3,4) . "<br>";
    echo "avg(1,2,3,4) = " . avg(1,2,3,4) . "<br><br>";

    echo "Memanggil fungsi sum dan avg dengan 6 argumen<br>";
    echo "sum(1,2,3,4,5,6) = " . sum(1,2,3,4,5,6) . "<br>";
    echo "avg(1,2,3,4,5,6) = " . avg(1,2,3,4,5,6) . "<br><br>";
?>
</body>
</html>