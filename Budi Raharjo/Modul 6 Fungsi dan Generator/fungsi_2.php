<html>
<head>
    <title>
        Demo kali dua dalam fungsi
    </title>
</head>
<body>

<?php
    function judul(){
        echo "<h2>Demo penggunaan fungsi untuk kali dua</h2>";
    }

    function kalidua($nilai){
        return $nilai << 1;
    }

    $hasil = kalidua(13);
    judul();
    echo "Hasil 13 x 2 adalah $hasil";
?>

</body>
</html>