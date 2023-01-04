<html lang="id">
    <head>
        <title>Menampilkan data</title>
    </head>
<body>
    <h2>Menampilkan data ke halaman web</h2>

    <?php
        $conn = mysqli_connect("localhost", "root",
            "", "sipegdb");

        if (mysqli_connect_errno()){
            echo 'Koneksi ke server gagal' . mysqli_connect_error();
        }

        $query = "select * from pegawai order by nip";
        $result = mysqli_query($conn, $query);

        if ($result){
            ?>
            <h4><u>Data karyawan PT.Asrofil Nadib</u></h4>;
            <form action="delete.php" method="post">
                <table border="1">
                    <tr>
                        <th width="80">NIP</th>
                        <th width="110">Nama</th>
                        <th width="220">Alamat</th>
                        <th width="130">No. Telp</th>
                    </tr>
                <?php
                while ($row = mysqli_fetch_row($result)){
                ?>
                        <tr>
                            <?php
                            $nip = $row[0];
                            $nama = $row[1];
                            $alamat = $row[2];
                            $no_hp = $row[3];
                            ?>
                            <td>
                                <label>
                                    <input type="checkbox" name="data[]"
                                           value="<?php echo $nip;?>">
                                </label>
                            </td>
                            <td><?php echo $nip;?></td>
                            <td>
                                <a  href="form_update.php?nip=<?php echo $nip;?>">
                                <?php echo $nama;?></td>
                            <td><?php echo $alamat;?></td>
                            <td><?php echo $no_hp;?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <br>
                <b>Keterangan: </b>
                <p>Klik link yang tersedia untuk mengubah data</p>
                <p>Pilih data yang ingin anda hapus, dengan men-checklist
                    kotak yang tersedia!</p>
                <br><br>
                <input type="submit" name="btnSubmit" value="Hapus">
            </form>
        <?php
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        ?>
</body>
</html>