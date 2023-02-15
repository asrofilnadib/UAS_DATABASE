<html lang="id">
<head>
    <title>Membaca File</title>
</head>
<body>
<h2>Demo penggunaan fungsi fread()</h2>

<?php
    $file = "C:\\Apache24\\htdocs\\Modul 10 File dan Direktori\\contoh.txt";
    $fp = fopen($file, "r");

    echo "Isi file anda adalah: <br>";
    while (!feof($fp)){
        # $pecahandata = fread($fp, 35);
        $pecahandata = fread($fp, filesize($file));
        echo $pecahandata . "<br>";
    }
    fclose($fp);
?>
</body>
</html>