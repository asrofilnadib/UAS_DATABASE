<?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    if (isset($nama) and isset($email)){
        echo "<h3>Data yang anda masukan adalah:</h3>";
        echo "Nama\t\t: $nama<br>";
        echo "Email\t: $email";
    }