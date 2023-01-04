<?php
    $nama = $_POST["nama"];
    if (isset($nama)){
        echo "Halo <b>$nama</b>, terima kasih " .
            "karena sudah menggunakan website kami";
    }