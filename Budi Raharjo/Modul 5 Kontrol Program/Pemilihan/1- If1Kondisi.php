<?php
$angka = $_POST["angka"];
if ($angka < 1 || $angka > 10){
    echo "Anda memasukan angka $angka.</br>";
    echo "Bilangan yang anda masukan harus".
        " dalam rentang 1-10";
    exit();
}
echo "Bilangan yang anda masukan adalah $angka";
