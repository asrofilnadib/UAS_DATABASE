<html lang="id">
<head>
    <title>ltrim, rtrim, trim</title>
</head>
<body>
<h2>Penggunaan ltrim(), rtrim(), trim()</h2>

<?php
    echo "<b>Penggunaan ltrim():</b><br>";
    $str1 = "   Modul Pemrograman Web";
    echo "\$str1 = $str1<br>";
    echo "Jumlah karakter: " . strlen($str1) . "<br>";
    $str_trim = trim($str1);
    echo "\$str1 = $str1<br>";
    echo "Jumlah karakter: " . strlen($str_trim) . "<br><br>";

    echo "<b>Penggunaan rtrim():</b><br>";
    $str2 = "Modul Pemrograman Web   ";
    echo "\$str2 = $str2<br>";
    echo "Jumlah karakter: " . strlen($str2) . "<br>";
    $str_trim = trim($str2);
    echo "\$str2 = $str2<br>";
    echo "Jumlah karakter: " . strlen($str_trim) . "<br><br>";

    echo "<b>Penggunaan trim():</b><br>";
    $str3 = "   Modul Pemrograman Web   ";
    echo "\$str3 = $str3<br>";
    echo "Jumlah karakter: " . strlen($str3) . "<br>";
    $str_trim = trim($str3);
    echo "\$str3 = $str3<br>";
    echo "Jumlah karakter: " . strlen($str_trim) . "<br><br>";
?>
</body>
</html>