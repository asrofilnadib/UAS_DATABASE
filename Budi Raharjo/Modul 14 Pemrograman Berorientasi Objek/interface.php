<html lang="id">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<h2>Demo Penggunaan Abstract</h2>

<body>
<?php
    // Membuat kelas abstract 3D
    interface TigaDimensi {
        public function hitungvolume();
    }

    // Kelas Kubus turunan dari 3D
    class Kubus implements TigaDimensi {
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

    // Kelas Balok turunan dari 3D
    class Balok implements TigaDimensi {
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

    // Kelas Bola turunan dari 3D
    class Bola implements TigaDimensi {
        const PI=3.14;
        private $jari_jari;
        public function __construct($r) {
            $this->jari_jari = $r;
        }
        // Implementasi metode abstrak
        public function hitungvolume() {
            return (4 * self::PI * pow($this->jari_jari, 3)/3);
        }
    }

    // fungsi parameter bersifat polimorfik
    function tampilkanVolume(TigaDimensi $objek, $namaObjek) {
        echo "Volume $namaObjek = " . $objek->hitungvolume() . "<br>";
    }

    // Objek dari kelas Kubus
    $kubus = new Kubus(3);
    tampilkanVolume($kubus, "Kubus");

    // Objek dari kelas Balok
    $balok = new Balok(5, 3, 8);
    tampilkanVolume($balok, "Balok");

    // Objek dari kelas Bola
    $bola = new Bola(2);
    tampilkanVolume($bola, "Bola");
?>
</body>
</html>