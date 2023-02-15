<html lang="id">
<head>
	<title>Show data of Warga</title>
</head>
<body>
<h2>Data Warga RT 12</h2>

<?php
	require('connectdb.php');
	
    $query = "SELECT * FROM warga order by `nik`";
	$result = mysqli_query($conn, $query);
	
	if ($result){
		?>
		<h4><u>Data Warga RT.12</u></h4>;
		<form action="delete.php" method="post">
			<table border="1">
				<tr>
                    <th width="145">NIK</th>
                    <th width="145">NKK</th>
					<th width="220">Nama</th>
                    <th width="150">Tanggal Lahir</th>
                    <th width="150">Jenis Kelamin</th>
                    <th width="150">Pekerjaan</th>
                    <th width=120>Agama</th>
				</tr>
				<?php
					while ($row = mysqli_fetch_row($result)){
						?>
						<tr>
							<?php
								$nik = $row[0];
                                $nkk = $row[1];
								$nama = $row[2];
								$tgl_lahir = $row[3];
								$jk = $row[4];
                                $pekerjaan = $row[5];
                                $agama = $row[6];
							?>
							<td>
								<label>
									<input type="checkbox" name="data[]"
												 value="<?php echo $nik;?>">
								</label>
								<?php echo $nik;?>
							</td>
							<td><?php echo $nkk;?></a></td>
							<td>
                                <a  href="form_updateW.php?nik=<?php echo $nik;?>">
                                  <?php echo $nama;?></a></td>
							<td><?php echo $tgl_lahir;?></td>
							<td><?php echo $jk;?></td>
                            <td><?php echo $pekerjaan;?></td>
                            <td><?php echo $agama; ?></td>
						</tr>
						<?php
					}
				?>
			</table>
			<br>
			<b>Keterangan: </b>
			<p>Klik link yang tersedia untuk mengubah data</p>
			<p>Pilih data yang ingin anda hapus, dengan men-checklist
				kotak yang tersedia</p>
			<br><br>
			<input type="submit" name="hapus" value="Hapus">
		</form>
        <a href="pageW.html">Kembali ke halaman utama</a>
        <br><br>
        <a href="menambah_dataW.html">Menambah data</a>
		<?php
		mysqli_free_result($result);
	}
	mysqli_close($conn);
?>
</body>
</html>