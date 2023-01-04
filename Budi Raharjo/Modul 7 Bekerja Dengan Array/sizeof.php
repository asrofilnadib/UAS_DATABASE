<html>
<head>
    <title>Mendapatkan Ukuran Array</title>
</head>
<body>
<h2>Menangkap ukuran array dengan sizeof() & count()</h2>

<?php
    $a = ["Jakarta", "Bandung", "Bogor"];

    echo "Array \$a: ";
    print_r($a);

    echo "<br>Menggunakan sizeof(): " . sizeof($a) . "<br>";
    echo "Menggunakan count(): " . count($a) . "<br>";

    echo "<br>isi dari \$a:<br>";
    for ($i=0; $i<sizeof($a); $i++){
        echo "<b>" . $a[$i] . "</b><br>";
    }

?>
</body>
</html>