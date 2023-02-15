<?php
$y = $_POST["n"];
if (isset($y)){
    $jumlah = 0;
    $i = 1;
    do{
        if ($i != $y){
            echo "$i + ";
        }
        else{
            echo "$i = ";
        }
        $jumlah += $i;
        $i++;
    } while ($i <= $y);
    echo $jumlah;
}
