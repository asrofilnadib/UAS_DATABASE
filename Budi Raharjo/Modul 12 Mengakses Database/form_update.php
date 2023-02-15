<html lang="id">
<head>
    <title>Update Form</title>
</head>
<h2>Form untuk perubahan pada data</h2>
<body>
<?php
    $nip = $_GET['nip'];

    $conn = mysqli_connect('localhost',
    'root', '', 'sipegdb');

    if (mysqli_connect_errno()){
        echo "Koneksi gagal ke server" . mysqli_connect_error();
        exit();
    }

    $query = "select nama, alamat, nohp from pegawai " .
        "where nip = '$nip'";

    $result = mysqli_query($conn, $query);
    if ($result){
        $row = mysqli_fetch_array($result);
    }
?>

<form action="update.php" method="post">
    <b>NIP: <br></b>
    <?php echo $nip; ?>
    <input type="hidden" name="nip" value="<?php echo $nip;?>">
    <br><br>
    <b>Nama: <br></b>
    <label>
        <input type="text" name="nama" size="15" maxlength="25"
               value="<?php echo $row[0];?>">
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
        <input type="text" name="nohp" size="15" maxlength="12"
               value="<?php echo $row[2];?>">
    </label>
    <br><br>
    <label>
        <input type="submit" name="SbmBTN" value="Simpan Perubahan">
    </label>
</form>
</body>
</html>