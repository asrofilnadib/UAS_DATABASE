<html>
<head>
    <title>Mengakses dan Membuat Array</title>
</head>
<h2>Demo mengakses array asosiatif</h2>
<body>

<?php
    $pegawai = array("dirut"=>"Ganjar",
        "manager"=>"Santoso",
        "marketing"=>"Cania");

    echo "Pegawai perusahaan XYZ:<br>";
    echo "<strong>Direktur Utama:</strong> " . $pegawai["dirut"] . "<br>";
    echo "<strong>Manager: </strong>" . $pegawai["manager"] . "<br>";
    echo "<strong>Marketing: </strong>" . $pegawai["marketing"] . "<br>";
?>
</body>
</html>