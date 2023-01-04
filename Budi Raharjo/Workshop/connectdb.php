<?php
	
	$conn = mysqli_connect('localhost', 'root',
	'', 'contohdb');
	
	if (mysqli_connect_errno()) {
		echo "Koneksi ke server gagal" . mysqli_connect_error();
		exit();
	}