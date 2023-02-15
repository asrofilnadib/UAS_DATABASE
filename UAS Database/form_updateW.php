<html lang="id">
<head>
    <title>Update Form Warga</title>
</head>
<h2>Form untuk perubahan data Warga</h2>
<body>
<?php
    $nik = $_GET['nik'];

    require('connectdb.php');
    
    $query = "SELECT * FROM warga WHERE `nik` = '$nik'";

    $result = mysqli_query($conn, $query);
    if ($result){
        $row = mysqli_fetch_array($result);
    }
?>

<form action="updateW.php" method="post">
    <b>NIK: <br></b>
    <?php echo $nik; ?>
    <input type="hidden" name="nik" value="<?php echo $nik;?>">
    <br><br>
    <b>NIK: <br></b>
    <label>
        <input type="text" name="nik" size="18" maxlength="18"
               value="<?php echo $row[0];?>">
    </label>
    <br><br>
    <b>NKK: <br></b>
    <label>
        <input type="text" name="nkk" size="18" maxlength="18"
               value="<?php echo $row[1];?>">
    </label>
    <br><br>
    <b>Nama Lengkap: <br></b>
    <label>
        <input type="text" name="nama" size="20" maxlength="25"
               value="<?php echo $row[2];?>">
    </label>
    <br><br>
    <b>Tanggal Lahir: <br></b>
    <label>
        <input type="date" name="tgl_lahir"
               value="<?php echo $row[3];?>">
    </label>
    <br><br>
    <b>Jenis Kelamin: <br></b>
    <label>
        <input type="text" name="jk" size="10" maxlength="15"
        value="<?php echo $row[4];?>">
    </label>
    <br><br>
    <b>Pekerjaan: <br></b>
    <label>
        <input type="text" name="pekerjaan" size="15" maxlength="25"
               value="<?php echo $row[5];?>">
    </label>
    <br><br>
    <b>Agama: <br></b>
    <label>
        <input type="text" name="agama" size="10" maxlength="15"
               value="<?php echo $row[6];?>">
    </label>
    <br><br>
    <label>
        <input type="submit" name="simpan" value="Simpan Perubahan">
    </label>
</form>
</body>
</html>