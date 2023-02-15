<html>
<head>
    <title>Struktur Pengulangan foreach</title>
</head>
<body>
<?php
    $pegawai = array("Manager" => "Rudi",
        "Supervisor" => "Kamil",
        "Marketing" => "Susi",
        "IT" => "Jamal");

    foreach ($pegawai as $divisi => $nama){
        echo "$divisi: $nama<br/>";
    }
    ?>
</body>
</html>

