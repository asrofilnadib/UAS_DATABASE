<html lang="id">
<head>
    <title>Workshop 1 - authentication user</title>
</head>
<body>
<h2>Status Registrasi</h2>
<?php
    if (isset($_POST['daftar'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $pwd = $_POST['pwd'];
  
        include("connectdb.php");
        
        $sql = "INSERT INTO webuser(`id`, `nama`, `pwd`)".
          "values('$id', '$nama', md5('$pwd'))";
        
        mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);
        if ($num > 0) {
            ?>
            Selamat, Anda telah terdaftar di website kami.<br>
            [<a href="login.php">Login</a>]<br><br>
            <table>
                <tr>
                    <td>ID: </td>
                    <td><b><?php echo $id ?></b></td>
                </tr>
                <tr>
                    <td>Nama: </td>
                    <td><b><?php echo $nama?></b></td>
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
            [<a href="register.php">Kembali ke form registrasi</a>
            <?php
        }
    }
?>
</body>
</html>
