<?php
$x = $_POST["x"];
if (isset($x)){
    $jumlah = 0;
    $i = 1;
    while ($i <= $x){
        if ($i != $x){
            echo "$i + ";
        }
        else{
            echo "$i = ";
        }
        $jumlah += $i;
        $i++;
    }
    echo $jumlah;
}