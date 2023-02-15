<html lang="id">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<h2>Demo Penggunaan Abstract</h2>

<body>
<?php
    trait LayarBrowser {
        public function cetakString($str) {
            echo $str;
        }
    }

    class Kubus {
        private $sisi;
        public function __construct($sisi) {
            $this->sisi = $sisi;
        }
        public function hitungVolume() {
            return pow($this->sisi, 3);
        }
        public function cetakVolume() {
            $this->cetakString("Volume kubus = " . $this->hitungvolume());
        }
    }

    $obj = new Kubus(3);
    $obj->cetakVolume();
?>
</body>
</html>