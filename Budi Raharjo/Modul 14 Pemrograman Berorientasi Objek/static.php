<html lang="en">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<body>
<h2>Demo Static</h2>

<?php
    class ContohKelas {
        public static $objectcounter = 0;
        public function __construct() {
            self::$objectcounter++;
        }
    }

    $obj1 = new ContohKelas();
    echo "Membuat objek pertama...<br>";
    echo "Jumlah objek saat ini = " . ContohKelas::$objectcounter . "<br>";

    $obj2 = new ContohKelas();
    echo "<br>Membuat objek pertama...<br>";
    echo "Jumlah objek saat ini = " . ContohKelas::$objectcounter . "<br>";

    $obj3 = new ContohKelas();
    echo "<br>Membuat objek pertama...<br>";
    echo "Jumlah objek saat ini = " . ContohKelas::$objectcounter . "<br>";
?>
</body>
</html>