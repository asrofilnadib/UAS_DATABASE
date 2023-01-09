<html lang="id">
<head>
	<title>Login Proccess</title>
</head>
<body>
<?php
	if (isset($_POST["login"])) {
		$nik = $_POST['nik'];
		$pwd = $_POST['pwd'];
		
        require ("connectdb.php");
       
        $sqlW = "SELECT nama FROM `warga`".
				"WHERE `nik` = '$nik' and `password` = md5('$pwd')";
        
        $sqlP = "SELECT nama FROM `pengurus`".
                "WHERE `nik` = '$nik' and `password` = md5('$pwd')";
    
//		$result = mysqli_query($conn, "SELECT nama FROM webuser".
//		    "WHERE id = '$id' and pwd = md5('$pwd')");
      
        $resultW = mysqli_query($conn, $sqlW);
		$numW = mysqli_num_rows($resultW);
        
        $resultP = mysqli_query($conn, $sqlP);
        $numP = mysqli_num_rows($resultP);
        
        if ($numW == 1) {
            list($nama) = mysqli_fetch_array($resultW);
            ?>
            <h2>Secret Area</h2>
            Selamat datang, <b><?php echo $nama; ?> Dalam RT 12</b><br>
            
            Ini adalah halaman yang hanya dapat diakses
            oleh user yang telah terdaftar di dalam website.
            <br><br>
            <a href="show_dataW.php">Lihat daftar Warga</a>
            <?php
        } elseif ($numP == 1) {
			list($nama) = mysqli_fetch_array($resultP);
			?>
            <h2>Secret Area</h2>
            Selamat datang, <b><?php echo $nama; ?> Dalam RT 12</b><br>

            Ini adalah halaman yang hanya dapat diakses
            oleh pengurus yang telah terdaftar di dalam website.
            <br><br>
            <a href="show_dataP.php">Lihat daftar Pengurus RT 12</a>
			<?php
		} elseif (!$numP or !$numW) {
			?>
			<h2 align="center">GAGAL UNTUK LOGIN</h2>
            <p>NIK atau Pasword salah. Silahkan kembali ke halaman login</p>
            <a href="login.php" methods="post">Login</a>
			<?php
        } else {
            header("Location: ".
            "http://localhost/xampp/htdocs/UAS Database/login.php");
		}
	}
?>
</body>
</html>