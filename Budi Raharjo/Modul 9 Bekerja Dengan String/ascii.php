<html lang="id">
<head>
    <title>ord() dan chr()</title>
</head>
<body>
<h2>Demo mengonversi karakter ke kode ascii dan sebaliknya</h2>

<?php
    for ($i=ord("A"); $i<=ord("Z"); $i++){
        printf("%d = %s &nbsp;&nbsp", $i, chr($i));
        if ($i % 2 == 0){
            echo "<br>";
        }
    }
?>
</body>
</html>