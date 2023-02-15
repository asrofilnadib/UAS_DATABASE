<html lang="id">
<head>
    <title>Registration Proccess</title>
</head>
<body>
<h2>Status Registrasi</h2>
<?php
    if (isset($_POST['daftar'])) {
        $nik = $_POST['nik'];
        $nkk = $_POST['nkk'];
        $nama = $_POST['nama'];
        $tgl_lhr = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $pekerjaan = $_POST['pekerjaan'];
        $agama = $_POST['agama'];
        $pwd = $_POST['pwd'];
  
        include("connectdb.php");
        
        $sql = "INSERT INTO warga(`nik`, `nkk`, `nama`, `tgl_lahir`,
                  `jk`, `pekerjaan`, `agama`, `password`)".
          "values('$nik', '$nkk', '$nama', '$tgl_lhr', '$jk',
          '$pekerjaan', '$agama', md5('$pwd'))";
        
        mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);
        if ($num > 0) {
            ?>
            Selamat, Anda telah terdaftar di website kami.<br>
            <a href="login.php">Login</a><br><br>
            <table>
                <tr>
                    <td>NIK: </td>
                    <td><b><?php echo $nik ?></b></td>
                </tr>
                <tr>
                    <td>NKK: </td>
                    <td><b><?php echo $nkk ?></b></td>
                </tr>
                <tr>
                    <td>Nama: </td>
                    <td><b><?php echo $nama?></b></td>
                </tr>
                <<tr>
                    <td>Tanggal Lahir: </td>
                    <td><b><?php echo $tgl_lhr ?></b></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin: </td>
                    <td><b><?php echo $jk ?></b></td>
                </tr>
                <tr>
                    <td>Pekerjaan: </td>
                    <td><b><?php echo $pekerjaan ?></b></td>
                </tr>
                <tr>
                    <td>Agama: </td>
                    <td><b><?php echo $agama ?></b></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><b><?php echo $pwd?></b></td>
                </tr>
            </table>
            <?php
        } else {
            ?>
            Proses Registrasi gagal. Silahkan diulangi<br>
            [<a href="sign-upW.html">Kembali ke form registrasi</a>
            <?php
        }
    }
?>
</body>
</html>
