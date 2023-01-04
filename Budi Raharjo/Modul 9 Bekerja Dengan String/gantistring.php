<html lang="id">
<head>
    <title>str_replace()</title>
</head>
<body>
<h2>Penggunaan str_replace()</h2>

<?php
    $str = "Python itu menyenangkan, Python itu bagus, Python itu gokiiil";

    echo "Sebelum diubah: <br>";
    echo $str. "<br><br>";

    $str1 = str_replace("Python", "PHP", $str, $n);

    echo "Setelah diganti: <br>";
    echo $str1 . "<br><br>";

    echo "Jumlah pergantian yang telah dilakukan: " . $n;
?>
</body>
</html>