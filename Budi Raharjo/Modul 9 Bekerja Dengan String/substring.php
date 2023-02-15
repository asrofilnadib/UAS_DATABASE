<html lang="id">
<head>
    <title>Penggunaan strstr dan substring</title>
</head>
<body>
<h2>Demo penggunaan strstr() dan substring()</h2>

<?php
    $str = "Pemrograman Web";
    echo "\$str = $str<br><br>";

    echo "<b>Mencari Substring:<br></b>";
    $str1 = strstr($str, "kuak");
    if ($str1){
        echo "Substring \"mrogr\" ditemukan dalam \$str";
    } else{
        echo "Substring \"kuak\" tidak ditemukan dalam \$str";
    }
    echo "<br><br>";

    echo "<b>Mengambil Substring:<br></b>";
    echo substr($str, 5) . "<br>";
    echo substr($str, 2, 7);
?>
</body>
</html>