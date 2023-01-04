<?php
    $fileUser = $_FILES['fileUser']["tmp_name"];
    $namafile = $_FILES['fileUser']["name"];

    $tujuan = "C:\\xampp\\tmp\\Img\\" . $namafile;

    if ($fileUser != "none"){
        copy($fileUser, $tujuan);
        echo "<b>Proses upload telah dilakukan</b><br>";
        echo "\$fileUser = $fileUser<br>";
        echo "\$tujuan = $tujuan";
    } else {
        echo "Upload ERROR!<br>";
        echo "Tidak ada file yang di upload";
    }
