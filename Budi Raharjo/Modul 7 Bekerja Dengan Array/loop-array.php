<html>
<head>
    <title>Perulangan Dalam Mengakses Array</title>
</head>
<body>
<h2>Demo menggunakan perulangan untuk mengakses array</h2>

<?php
    $suku = array("Jawa", "Bali", "Ambon", "Minang", "Aceh");
    $pegawai = array("dirut"=>"Ganjar",
        "manager"=>"Santoso",
        "marketing"=>"Cania");

    echo "<strong>Beberapa suku yang ada di Indonesia:</strong><br>";
    for ($i=0; $i<sizeof($suku); $i++){
        echo $suku[$i] . "<br>";
    }

    echo "<br><strong>Struktur organisasi dalam perusahaan XYZ:</strong><br>";
    foreach ($pegawai as $divisi => $nama){
        echo "<strong><i>$divisi: </i><strong>" . $nama . "<br>";
    }

?>
</body>
</html>