<html lang="id">
<head>
    <title>Membaca File</title>
</head>
<body>
<h2>Demo penggunaan fungsi fgets()</h2>

<?php
    $file = "C:\\Apache24\\htdocs\\Modul 10 File dan Direktori\\contoh.txt";
    $fp = fopen($file, "r");

    echo "Isi file anda adalah: <br>";
    while (!feof($fp)){
        $baris = fgets($fp, 1024);
        echo $baris . "<br>";
    }
    fclose($fp);
?>
</body>
</html>