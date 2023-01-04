<html lang="id">
<head>
    <title>implode()</title>
</head>
<body>
<h2>Penggunaan implode(), Array to String</h2>

<?php
    $str = ["PHP", "Perl", "Python", "Ruby", "Kotlin", "Assembly"];

    echo "\$str = ";
    print_r($str);
    echo "<br><br>";

    $str1 = implode(" ", $str);
    $str2 = implode(";", $str);

    echo "\$str1 = $str1<br>";
    echo "\$str2 = $str2"
?>
</body>
</html>