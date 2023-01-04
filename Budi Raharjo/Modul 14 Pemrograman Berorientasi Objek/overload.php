<html lang="en">
<head>
    <title>Pemrograman Berorientasi Objek</title>
</head>
<body>
<h2>DEMO Overload</h2>

<?php
    class Overload {
        public function __call($nama, $param) {
            if ($nama == "tulis"){
                for ($i=0; $i<sizeof($param); $i++){
                    echo $param[$i] . "<br>";
                }
            }
        }
    }

    $obj = new Overload();

    echo "Pemanggilan dengan 1 parameter...<br>";
    $obj->tulis('PHP');

    echo "Pemanggilan dengan 2 parameter...<br>";
    $obj->tulis('PHP', "Java");

    echo "Pemanggilan dengan 3 parameter...<br>";
    $obj->tulis('Python', 'GO', 'Kotlin');
?>
</body>
</html>
<?php
