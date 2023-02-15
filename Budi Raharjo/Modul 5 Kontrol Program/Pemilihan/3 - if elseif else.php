<?php
    $uas = $_POST['uas'];
    $uts = $_POST['uts'];

    $nilai = (0.4 * $uts) + (0.6 * $uas);

    if ($nilai >= 85){
        $indeks = 'A';
    } elseif ($nilai >= 75){
        $indeks = 'B';
    } elseif ($nilai >= 55){
        $indeks = "C";
    } elseif ($nilai >= 40){
        $indeks = "D";
    } else{
        $indeks = "E";
    }
    echo "Nilai UTS anda: $uts.<br>";
    echo "Nilai UAS anda: $uas.<br><br>";
    echo "Nilai Akhir adalah : <strong>$nilai</strong><br>";
    echo "Indeks Nilai adalah : <strong>$indeks</strong>";