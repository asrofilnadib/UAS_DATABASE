<html>
<head>
    <title>Array sebagai nilai balik</title>
</head>
<h3>fungsi yang mengembalikan banyak nilai</h3>
<body>

<?php
    function perhitungan($a, $b){
        return ['tambah'=>$a+$b,
            'kurang'=>$a-$b,
            'bagi'=>$a/$b,
            'kali'=>$a*$b];
    }

    $x = 15;
    $y = 6;

    echo "\$a = $x<br>";
    echo "\$b = $y<br><br>";

    $hasil = perhitungan($x, $y);

    echo "\$a + \$b = " . $hasil['tambah'] . "<br>";
    echo "\$a - \$b = " . $hasil['kurang'] . "<br>";
    echo "\$a : \$b = " . $hasil['bagi'] . "<br>";
    echo "\$a x \$b = " . $hasil['kali'] . "<br>";
?>
</body>
</html>