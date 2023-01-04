<?php
    echo "<h3>Daftar file yang telah ter-upload</h3>";
    $counter = 0;
    for ($i=0;$i<5;$i++){
        $str = "fileUser" . $i;
        $fileUser = $_FILES[$str]["tmp_name"][$i];
        $namafile = $_FILES[$str]['name'][$i];
        $ukuran = $_FILES[$str]['size'][$i];
        $tipe = $_FILES[$str]['type'][$i];

        $tujuan = "C:xampp\\tmp\\Img\\  " . $namafile;

        if ($fileUser != "none") {
            copy($fileUser, $tujuan);
            echo "Nama file: $namafile<br>";
            echo "Ukuran: $ukuran<br>";
            echo "Tipe: $tipe<br><br>";
            $counter++;
        } else {
            continue;
        }
    }
    if ($counter == 0){
        echo "Tidak ada file yang diupload";
    }