<html>
<head>
    <title>Menggabungkan Array</title>
</head>
<body>
<h2>Demo Penggabungan beberapa Array</h2>

<?php
    function mergeArray(){
      echo "<b>Penggunaan array_merge() function<br></b>";
      $a = [1=>10,2=>20,3=>30];
      $b = [1=>100,2=>200,3=>300,4=>400,5=>500];

      echo "Array \$a:<br>";
      print_r($a);
      echo "<br><br>Array \$b: <br>";
      print_r($b);
      $c = array_merge($a, $b);
      echo "<br><br>Array setelah  di gabung:<br>";
      print_r($c);
    }

    function combineArray(){
        echo "<b>Penggunaan array_combine() function</b><br>";
        $a = ["B", "f", "K"];
        $b = ["Jakarta", "Medan", "Aceh"];

        echo "Array \$a: <br>";
        print_r($a);
        echo "<br><br>Array \$b: <br>";
        print_r($b);
        $c = array_combine($a, $b);
        echo "<br><br>Array setelah di gabung:<br>";
        print_r($c);
    }

    mergeArray();
    echo "<br><br><br>";
    combineArray();
?>
</body>
</html>