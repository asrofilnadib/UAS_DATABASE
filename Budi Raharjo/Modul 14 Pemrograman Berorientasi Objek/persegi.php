<html lang="en">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<body>
<h2>DEMO Penggunaan OOP</h2>
<?php
    class Persegi {
        private $panjang;
        private $lebar;
        // Konstructor
        public function __construct($p, $l){
            $this->panjang = $p;
            $this->lebar = $l;
            echo "Kontruktor dipanggil...<br>";
        }
        /*public function setNilai($pp, $ll) {
            $this->panjang = $pp;
            $this->lebar=$ll;
        }*/
        public function getPanjang() {
            return $this->panjang;
        }
        public function getLebar() {
            return $this->lebar;
        }
        public function hitungLuas(){
            return $this->panjang * $this->lebar;
        }
        public function cetakLuas() {
            echo "Luas persegi panjang: " . $this->hitungLuas() . "<br>";
        }
        // Destructor
        public function __destruct() {
            // TODO: Implement __destruct() method.
            echo "Destruktor dipanggil...";
        }
    }

    /*$obj1 = new Persegi();
    $obj2 = new Persegi();

    $obj1->setNilai(3, 5);
    $obj2->setNilai(8, 12);*/

    /*$obj1 = new Persegi(4, 7);
    $obj2 = new Persegi(8, 9);*/

    $obj1 = new Persegi(23, 11);

    $obj1->cetakLuas();
    /*$obj2->cetakLuas();*/
?>

</body>
</html>