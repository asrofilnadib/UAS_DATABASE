<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDO: Mengubah Data</title>
</head>
<body>
<h2>Mengubah data pada database</h2>

<?php
    $nip = $_GET['nip'];

    $dsn = "mysql:host=localhost;dbname=sipegdb";
    $conn = new PDO($dsn, 'root', '');

    if (!$conn){
        echo "Koneksi ke server gagal";
        exit();
    }

    $query = "SELECT nama, alamat, nohp from pegawai " .
        "where nip = '$nip'";
    $result = $conn->query($query);

    if ($result){
            $row = $result->fetch(PDO::FETCH_NUM);
    }
?>

<form action="pdoUpdate.php" method="post">
    <b>NIP:<br></b>
    <?php echo $nip;?>
    <input type="hidden" name="nip" value="<?php echo $nip;?>">
    <br><br>
    <b>Nama:<br></b>
    <label>
        <input type="text" name="nama" size="15" maxlength="25"
               value="<?php echo $row[0]?>">
    </label>
    <br><br>
    <b>Alamat: <br></b>
    <label>
        <input type="text" name="alamat" size="50" maxlength="50"
               value="<?php echo $row[1];?>">
    </label>
    <br><br>
    <b>No.Telp: <br></b>
    <label>
        <input type="text" name="nohp" size="13" maxlength="14"
               value="<?php echo $row[2];?>">
    </label>
    <br><br>
    <label>
        <input type="submit" name="SubmitBTN" value="Simpan Perubahan">
    </label>
</form>
<?php
    $conn = NULL;
?>
</body>
</html>