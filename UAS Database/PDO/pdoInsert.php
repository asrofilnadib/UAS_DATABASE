<?php
if (isset($_POST['SubmitBTN'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    $dsn = "mysql:host=localhost;dbname=sipegdb";
    $conn = new PDO($dsn, "root", "");

        if (!$conn){
            echo "Koneksi ke server gagal";
            exit();
        }

    $sql = "INSERT INTO Pegawai(nip, nama, alamat, nohp)".
        "Values('$nip', '$nama', '$alamat', '$nohp')";
    $num = $conn->exec($sql);

    if ($num!=0){
        header('location:pdoSelect.php');
    } else {
        echo "Data gagal dimasukan ke dalam database";
    }

    $conn = NULL;
}