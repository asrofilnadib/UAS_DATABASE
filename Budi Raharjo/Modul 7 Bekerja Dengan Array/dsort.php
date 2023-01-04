<html>
<head>
    <title>Pengurutan dengan Sort Menurun</title>
</head>
<body>
<h2>Pengurutan dengan fungsi rsort()</h2>

<?php
    function rsorth(){
        echo "<u><b>Penggunaan sort()</b><br></u>";
        $suku = array("Jawa", "Bali", "Minang", "Dayak", "Aceh");

        echo "Sebelum array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }

        rsort($suku);

        echo "<br>Setelah array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }
    }

    function arsorth(){
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

        arsort($suku);

        echo "<br>Setelah array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }
    }

    function krsorth(){
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

        krsort($suku);

        echo "<br>Setelah array diurutkan:<br>";
        foreach ($suku as $key => $value){
            echo "$key: $value<br>";
        }
    }

    rsorth();
    echo "<br><br>";
    arsorth();
    echo "<br><br>";
    krsorth();
?>

</body>
</html>