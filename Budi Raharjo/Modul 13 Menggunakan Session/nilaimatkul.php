<?php
    session_start();
    ?>

<html lang="id">
<head>
    <title>Datar Nilai</title>
</head>
<body>
<h2>Daftar nilai mata kuliah Web Programming</h2>

Nama : <?php echo $_SESSION['nama']; ?><br>
Mata Kuliah : <?php echo $_SESSION['matkul']; ?><br><br>
<?php
    $daftarnilai = $_SESSION['nilai'];
?>
<table border="1">
    <tr>
        <th width="250">Materi Kursus</th>
        <th width="60">Nilai</th>
    </tr>
    <?php
    foreach ($daftarnilai as $materi => $nilai){
        ?>
        <tr>
            <td><?php echo $materi;?></td>
            <td align="center"><?php echo $nilai;?></td>
        </tr>
        <?php
        }
    ?>
</table>
</body>
</html>