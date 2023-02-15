<?php
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];

    echo "<h3>Data yang anda masukan adalah:<br></h3>";
    echo "Nama\t\t: $nama<br>";
    echo "Jenis Kelamin\t: ";

    if ($gender == "P"){
        echo "Pria";
    } else {
        echo "Wanita";
    }