<?php
session_start();
$idsession = session_id();
?>

<html lang="id">
<head>
    <title>Menggunakan Session</title>
</head>
<body>
<h2>Demo Menggunakan session (Bagian 2)</h2>

<?php
    echo "ID Session: <b>$idsession</b><br><br>    ";
    $_SESSION['nama'] = "Mohammad Asrofil Nadib";
    $_SESSION['usia'] = 19;

    echo "\$_SESSION[\"nama\"]: " . $_SESSION["nama"] . "<br>";
    echo "\$_SESSION[\"usia\"]: " . $_SESSION["usia"];
?>
</body>
</html>
