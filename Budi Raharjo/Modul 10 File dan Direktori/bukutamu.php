<html lang="id">
<head>
    <title>Menggunakan File</title>
</head>
<body>
<h2>Penggunaan file untuk membuat buku tamu</h2>

<?php
    if (isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];
    }

    $file = "C:\\Apache24\\htdocs\\Modul 10 File dan Direktori\\bukutamu.txt";

    if (!file_exists($file)){
        $fp = fopen($file, "w");
    } else {
        $fp = fopen($file, "a");
    }

    $baridata = $nama . ";" . $email . ";" . $komentar . "\n";
    fputs($fp, $baridata);

    fclose($fp);

    echo "Terima kasih <b>$nama</b>, telah menggunakan layanan kami.
    Data anda telah tersimpan di server kami"
?>
</body>
</html>