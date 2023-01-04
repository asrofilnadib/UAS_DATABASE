<?php
    if (isset($_POST["submitBTN"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $website = $_POST["website"];
        $komentar = $_POST["komentar"];
        echo "<h3>Data yang anda masukan adalah:</h3>";
        echo "Nama : $nama<br>";
        echo "Email : $email<br>";
        echo "Website : $website<br>";
        echo "Komentar : $komentar";
    }