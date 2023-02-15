<?php
    $nama = $_GET["nama"];
    if (isset($nama)){
        echo "Halo <b>$nama</b>, " .
            "terima kasih karena sudah mengunjungi website kami";
    }
