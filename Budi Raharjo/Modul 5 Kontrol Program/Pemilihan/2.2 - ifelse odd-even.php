<?php
$angka = $_POST['angka'];
if ($angka % 2 == 0){
    echo "Angka $angka adalah bilangan GENAP";
} else{
    echo "Angka $angka adalah bilangan GANJIL";
}
