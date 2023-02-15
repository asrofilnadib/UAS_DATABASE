<?php
session_start();
$idsession = session_id();
if (!isset($_SESSION['count'])){
    $_SESSION['count'] = 1;
}
?>

<html lang="id">
<head>
    <title>Menggunakan Session</title>
</head>
<body>
<h2>Demo Penggunaan sesion (Bagian 1)</h2>

<?php
    echo "ID Sesssion = $idsession<br>";
    echo "Anda telah mengunjungi halaman ini sebanyak " . $_SESSION['count'] . " kali";
    $_SESSION['count'] = $_SESSION['count'] + 1;
    ?>

</body>
</html>