<html>
<head>
    <title>Pengurutan dengan Sort</title>
</head>
<body>
<h2>Pengurutan dengan fungsi sort()</h2>

<?php
    function sorth(){
        echo "<u><b>Penggunaan sort()</b><br></u>";
        $suku = array("Jawa", "Bali", "Minang", "Dayak", "Aceh");

        echo "Sebelum array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }

        sort($suku);

        echo "<br>Setelah array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }
    }

    function asorth(){
        echo "<u><b>Penggunaan asort()</b><br></u>";
        $suku = array("0"=>"Jawa",
            "1"=>"Bali",
            "2"=>"Minang",
            "3"=>"Dayak",
            "4"=>"Aceh");

        echo "Sebelum array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }

        asort($suku);

        echo "<br>Setelah array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }
    }

    function ksorth(){
        echo "<u><b>Penggunaan ksort()</b><br></u>";
        $suku = array("nol"=>"Jawa",
            "satu"=>"Bali",
            "dua"=>"Minang",
            "tiga"=>"Dayak",
            "empat"=>"Aceh");

        echo "Sebelum array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }

        ksort($suku);

        echo "<br>Setelah array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }
    }

    sorth();
    echo "<br><br>";
    asorth();
    echo "<br><br>";
    ksorth();
?>

</body>
</html>