<html>
<head>
    <title>Demo Parameter Pass by Value</title>
</head>
<h2>Melewatkan parameter berdasarkan nilai (Pass by Value)</h2>

<body>
<?php
function kalidua(&$nilai){
    $nilai = $nilai << 1;
}
$a = 13;
echo "Sebelum pemanggilan fungsi: $a <br>";

kalidua($a);
echo "Setelah pemanggilan fungsi: $a";
?>
</body>
</html>