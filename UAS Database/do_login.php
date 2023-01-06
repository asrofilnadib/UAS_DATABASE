<html lang="id">
<head>
	<title>Workshop 1 - authentication user</title>
</head>
<body>
<?php
	if (isset($_POST["login"])) {
		$id = $_POST['id'];
		$pwd = $_POST['pwd'];
		
        require ("connectdb.php");
       
        $sql = "SELECT nama FROM `webuser`".
				"WHERE `id` = '$id' and `pwd` = md5('$pwd')";
    
//		$result = mysqli_query($conn, "SELECT nama FROM webuser".
//		    "WHERE id = '$id' and pwd = md5('$pwd')");
      
        $result = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($result);
        
        if ($num == 1) {
            list($nama) = mysqli_fetch_array($result);
            ?>
            <h2>Secret Area</h2>
            Selamat datang, <b><?php echo $nama; ?></b><br>
            
            Ini adalah contoh halaman yang hanya dapat diakses
            oleh user yang telah terdaftar di dalam website.
            <?php
        } else {
            header("Location: ".
            "http://localhost/xampp/htdocs/Budi Raharjo/Workshop/login.php");
		}
	}
?>
</body>
</html>