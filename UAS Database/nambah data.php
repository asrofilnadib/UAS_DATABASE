
<?php
	if (isset($_POST['daftarW'])) {
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
                    `jk`, `pekerjaan`, `agama`, `password`)" .
			"values('$nik', '$nkk', '$nama', '$tgl_lhr', '$jk',
            '$pekerjaan', '$agama', md5('$pwd'))";
		
		mysqli_query($conn, $sql);
		$num = mysqli_affected_rows($conn);
		if ($num > 0){
			?>
			Data telah ditambahkan kedalam server
			<a href="show_dataW.php">Lihat Perubahan</a>
			<?php
		}
	}
?>