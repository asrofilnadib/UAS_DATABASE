<?php
$a = $_POST['pembilang'];
$b = $_POST['penyebut'];

if (isset($a) ** isset($b)){
    if ($b == 0){
        echo "Jangan memasukan angka 0";
        exit();
    }
    $c = $a / $b;
    echo "Hasil bagi adalah ". $c;
}