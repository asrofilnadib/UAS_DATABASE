<html lang="en">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<body>
<h2>Demo Penggunaan Pewarisan</h2>

<?php
    class A {
        private $a;

        public function __construct($a) {
            $this->a = $a;
        }
        public function setNilaiA($a) {
            $this->a = $a;
        }
        public function getNilaiA() : int {
            return $this->a;
        }
    }

    class B extends A {
        private $b;
        public function __construct($a, $b) {
            parent::setNilaiA($a);
            $this->b = $b;
        }
        public function setNilaiB($b) {
            $this->b = $b;
        }
        public function getNilaiB() : int {
            return $this->b;
        }
    }

    $obj1 = new B(10, 20);

    echo "Kondisi awal...<br>";
    echo "\$a = " . $obj1->getNilaiA() . "<br>";
    echo "\$b = " . $obj1->getNilaiB() . "<br><br>";

    $obj1->setNilaiA(100);
    $obj1->setNilaiB(200);

    echo "Kondisi setelah diubah...<br>";
    echo "\$a = " . $obj1->getNilaiA() . "<br>";
    echo "\$b = " . $obj1->getNilaiB() . "<br><br>";

?>
</body>
</html>
