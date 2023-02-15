<html lang="id">
<head>
    <title>Menulis data</title>
</head>
<body>
<h2>Demo menulis data kedalam file fwrite() and fputs()</h2>

<?php
    $file = "C:\\Apache24\\htdocs\\Modul 10 File dan Direktori\\contoh2.txt";

    $fp = fopen($file, "w");
    echo "Menulis data ke $file...";
    fwrite($fp, "Data yang dituliskan.\n");
    fclose($fp);

    echo "<br>Menambah data ke $file...";
    $fp = fopen($file, "a");
    fputs($fp, "Data yang ditambahkan.\n");
    fclose($fp);

    echo "<br><br>Data anda adalah:<br>";
    $fp = fopen($file, "r");
    while (!feof($fp)){
        $baris = fgets($fp, 1024);
        echo "<b>$baris <br></b>";
    }
    fclose($fp)
?>
</body>
</html>