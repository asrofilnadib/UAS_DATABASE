<html lang="id">
<head>
    <title>explode()</title>
</head>
<body>
<h2>Penggunaan explode(), Pemecah string</h2>

<?php
    $str = "Apa yang harus saya tulis coba disini";

    echo "Sebelum di ubah:<br>";
    echo $str . "<br><br>";

    $daftarstring = explode(" ", $str);
    echo "Setelah dipecah:<br>";

    foreach ($daftarstring as $s){
        echo $s . "<br>";
    }
?>
</body>
</html>