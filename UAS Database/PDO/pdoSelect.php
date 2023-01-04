<html lang="id">
<head>
    <title>Seleksi dengan PDO</title>
</head>
<body>
<h2>Demo Penggunaan PDO untuk seleksi data dari database</h2>

<?php
    $dsn = "mysql:host=localhost;dbname=sipegdb";
    $conn = new PDO($dsn, 'root', '');

    if (!$conn){
        echo "Gagal koneksi ke server" . mysqli_connect_error();
        exit();
    }

    $query = "SELECT * from pegawai order by nip";
    $result = $conn->query($query);

    if ($result){
        ?>
        <h4><u>Data Karyawan PT.Asrofil Nadib</u></h4>
        <table border="1">
            <tr>
                <th width="80" align="center    ">NIP</th>
                <th width="110">Nama</th>
                <th width="220">Alamat</th>
                <th width="130">nohp</th>
            </tr>
    <?php
        while ($row = $result->fetch(PDO::FETCH_NUM)){
            ?>
            <tr>
                <?php
                $nip = $row[0];
                $nama = $row[1];
                $alamat = $row[2];
                $nohp = $row[3];
                ?>
                <td><?php echo $nip;?></td>
                <td align="center"><?php echo $nama;?></td>
                <td><?php echo $alamat?></td>
                <td><?php echo $nohp;?></td>
                <td align="center">
                    <a href="pdoUpdateForm.php?nip=<?php echo $nip;?>">Ubah</a>
                </td>
                <td align="center">
                    <a href="pdoDelete.php?nip=<?php echo $nip;?>">Hapus</a>
                </td>
            </tr>
            <?php
        }
    ?>
        </table>
        <p><a href="pdoForm.html">Tambah Data</a></p>
    <?php
    }

    $conn = NULL;
?>

</body>
</html>