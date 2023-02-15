<?php
$nip = $_GET['nip'];

$dsn = "mysql:host=localhost;dbname=sipegdb";
$conn = new PDO($dsn, "root", '');

if (!$conn){
    echo "Koneksi ke server gagal";
    exit();
}

$sql = "Delete from pegawai where nip='$nip'";
$num = $conn->exec($sql);

if ($num!=0){
    header("location: pdoSelect.php");
} else {
    echo "Data gagal dihapus";
}

$conn = NULL;