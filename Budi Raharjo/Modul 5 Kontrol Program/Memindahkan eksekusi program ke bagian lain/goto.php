<html>
<head>
    <title>Statement Goto</title>
</head>
<body>
<?php
$i = 0;

mulai:

if ($i <= 10){
    echo "Baris ke-". $i . "<br>";
    $i++;
    goto mulai;
}
?>
</body>
</html>