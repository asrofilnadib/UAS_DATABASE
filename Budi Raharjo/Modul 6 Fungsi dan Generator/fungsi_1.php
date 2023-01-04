<html>
<head>
    <title>
        Demo Fungsi
    </title>
</head>
<body>

<?php
    function judul(){
        echo "<h2>Demo penggunaan 2 " . "fungsi</h2>";
    }

    function gabungstring($kiri, $kanan){
        return $kiri . $kanan;
    }

    $str1 = "Asrofil ";
    $str2 = "Nadib";

    judul();
    echo "str1: $str1 <br>";
    echo "str2: $str2 <br>";
    $hasil = gabungstring($str1, $str2);
    echo "Setelah digabung: $hasil";
?>

</body>
</html>
