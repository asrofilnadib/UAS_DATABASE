<html lang="id">
<head>
    <title>Penggunaan strlen</title>
</head>
<body>
<h2>Demo penggunaan strlen()</h2>
<?php
    $str1 = "Modul praktikum pemrograman web";
    $str2 = "PHP";

    $x = strlen($str1);
    $y = strlen($str2);

    echo "\$str1 = Modul praktikum pemrograman web<br>";
    echo "Jumlah karakter pada \$str1: $x<br><br>";
    echo "\$str2 = PHP<br>";
    echo "Jumlah karakter pada \$str2: $y";
?>
</body>
</html>