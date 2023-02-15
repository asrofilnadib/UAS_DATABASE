<html>
<head>
    <title>Demo Parameter Default</title>
</head>
<h2>Penggunaan parameter default</h2>
<body>

<?php
    function increment(&$nilai, $d=1){
        $nilai += $d;
    }

    $a = 10;
    $b = 10;

    echo "Sebelum proses increment<br>";
    echo "\$a = $a <br>";
    echo "\$b = $b <br><br>";

    echo "Memanggil fungsi increment<br>";
    echo "increment(\$a) <br>";
    echo "increment(\$b, 5) <br><br>";

    increment($a);
    increment($b, 5);

    echo "Setelah proses increment<br>";
    echo "\$a = $a <br>";
    echo "\$b = $b"
?>
</body>
</html>