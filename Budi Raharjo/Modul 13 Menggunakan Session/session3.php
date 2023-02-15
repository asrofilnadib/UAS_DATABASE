<?php
    session_start();
    ?>

<html lang="id">
<head>
    <title>Menggunakan session</title>
</head>
<body>
<h2>Demo penggunaan session (bagian 3)</h2>

<?php
    $_SESSION['nama'] = "Mohammad Asrofil Nadib";
    $_SESSION['matkul'] = "Web Programming";
    $_SESSION['nilai'] = array(
        "MySQL" => "A",
        "HTML" => "A",
        "PHP" => "B",
        "Algoritma" => "C");

    echo "Selamat datang <b>" . $_SESSION['nama'] . "</b>";
?>
<br><br>
    <a href="nilaimatkul.php">Lihat nilai</a>
</body>
</html>
