<?php
$angka = $_POST['angka'];
if ($angka < 1 || $angka > 10){
    echo "Bilangan yang anda masukan $angka.</br>";
    echo "ERROR: Bilangan harus rentang antara 1 hingga 10";
} else{
    echo "Bilangan yang anda masukan adalah $angka";
}