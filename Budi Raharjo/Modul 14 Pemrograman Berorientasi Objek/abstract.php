<html lang="id">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<h2>Demo Penggunaan Abstract</h2>

<?php
    // Membuat kelas abstract 3D
    abstract class TigaDimensi {
        abstract public function hitungvolume();
    }

    // Kubus kelas turunan dari 3D
    class Kubus extends TigaDimensi {
        private $sisi;
        public function __construct($sisi) {
            $this->sisi = $sisi;
        }
        // Implementasi metode abstrak
        public function hitungvolume() {
            return $this->sisi *
                $this->sisi *
                $this->sisi;
        }
    }

    // Balok kelas turunan dari 3D
    class Balok extends TigaDimensi {
        private $a, $b, $c;
        public function __construct($a, $b, $c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        // Implementasi metode abstrak
        public function hitungvolume() {
            return $this->a *
                $this->b *
                $this->c;
        }
    }

    $kubus = new Kubus(7);
    $balok = new Balok(5, 8, 4);

    echo "Volume \$kubus = " . $kubus->hitungvolume() . "<br>";
    echo "Volume \$balok = " . $balok->hitungvolume();
?>
</html>