<html>
<head>
    <title>Mencari Elemen Dalam Array</title>
</head>
<body>
<h2>Mencari elemen di dalam array dengan menggunakan fungsi</h2>

<?php
    function in_aray(){
        echo "<b>Demo menggunakan in_array() function</b><br>";
        $a = [10,20,30,40,50];

        echo "Array \$a: ";
        print_r($a);

        echo "<br><br>";
        echo "in_array(30, \$a): " . in_array(30, $a) . "<br>";
        echo "in_array(\"30\", \$a): " . in_array("30", $a) . "<br>";
        echo "in_array(\"30\", \$a, true): " . in_array("30", $a, true);
    }

    function aray_key(){
        echo "<b>Demo menggunakan array_key() function</b><br>";
        $a = ["B"=>"Jakarta","f"=>"Medan","K"=>"Aceh"];

        $key = array_keys($a);
        print_r($key);
    }

    function aray_values(){
        echo "<b>Demo menggunakan array_values() function</b><br>";
        $a = ["B"=>"Jakarta","f"=>"Medan","K"=>"Aceh"];

        $values = array_values($a);
        print_r($values);
    }

    function aray_search(){
        echo "<b>Demo menggunakan array_search() function</b><br>";
        $a = [10,20,30,40,50];

        echo "Array \$a: ";
        print_r($a);

        echo "<br><br>";
        echo "in_array(30, \$a): " . array_search(30, $a) . "<br>";
        echo "in_array(\"30\", \$a): " . array_search("30", $a) . "<br>";
        echo "in_array(\"30\", \$a, true): " . array_search("30", $a, true);
    }

    in_aray();
    echo "<br><br><br>";
    aray_key();
    echo "<br><br><br>";
    aray_values();
    echo "<br><br><br>";
    aray_search();
?>
</body>
</html>