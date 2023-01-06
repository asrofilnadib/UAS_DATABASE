<?php
	
	$conn = mysqli_connect('localhost', 'root',
	'', 'rukun_tetangga');
	
	if (mysqli_connect_errno()) {
		echo "Koneksi ke server gagal" . mysqli_connect_error();
		exit();
	}