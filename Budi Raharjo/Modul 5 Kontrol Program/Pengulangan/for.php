<?php
$f = $_POST['n'];
if (isset($f)){
    $jumlah = 0;
    for ($i = 1; $i<=$f; $i++){
        if ($i != $f){
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