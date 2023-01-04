<html lang="en">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<body>
<h2>Demo penggunaan CLONING</h2>

<?php
    class Lingkaran {
        const PI = 3.14;
        private $jarijari;

        public function __construct($r){
            $this->jarijari = $r;
        }
        public function setJarijari($r): void {
            $this->jarijari = $r;
        }
        public function getJarijari(){
            return $this->jarijari;
        }
        public function hitungLuas(): int {
            return self::PI * $this->jarijari * $this->jarijari;
        }
        public function cetakLuas(): void {
            echo "Luas Lingkaran = " . $this->hitungLuas() . "<br>";
        }
    }

    $obj1 = new Lingkaran(3);
    $obj2 = $obj1;
    $obj3 = clone $obj1;

    echo "Keadaan awal...<br>";
    echo "\$obj1: ";
    $obj1->cetakLuas();
    echo "\$obj2: ";
    $obj2->cetakLuas();
    echo "\$obj3: ";
    $obj3->cetakLuas();

    $obj1->setJarijari(6);
    echo "<br><br>Keadaan Akhir<br>";
    echo "\$obj1: ";
    $obj1->cetakLuas();
    echo "\$obj2: ";
    $obj2->cetakLuas();
    echo "\$obj3: ";
    $obj3->cetakLuas();
?>
</body>
</html>