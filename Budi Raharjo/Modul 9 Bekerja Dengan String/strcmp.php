<html lang="id">
<head>
    <title>strcmp()</title>
</head>
<body>
<h2>Penggunaan fungsi strcmp(), Pembanding</h2>
<?php
    $str1 = "PHP";
    $str2 = "php";
    $str3 = "PHP";

    echo "\$str1: $str1<br>";
    echo "\$str2: $str2<br>";
    echo "\$str3: $str3<br><br>";

    echo "strcmp(\$str1, $str2): " . strcmp($str1, $str2) . "<br>";
    echo "strcmp(\$str1, $str3): " . strcmp($str1, $str3) . "<br>";
    echo "strcmp(\$str2, $str3): " . strcmp($str2, $str3) . "<br>";
?>
</body>
</html>