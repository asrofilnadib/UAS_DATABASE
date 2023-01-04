<?php
    $namafile = '4 - Switch case.php';
    ?>

<html>
<head>
    <title>Statement if</title>
</head>
<h3>Demo penggunaan Switch case</h3>
<body>
<form action="<?php echo $namafile?>" method="post">
    Pilih bulan:
    <select name="bulan" size="1">
        <option value="0">[None]</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">Augustus</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">Novembver</option>
        <option value="12">Desember</option>
    </select>
    <input type="submit" name="submitquery">
</form>

<?php
    if (isset($_POST['submitquery'])){
        $bulan = $_POST['bulan'];

        switch ($bulan){
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12: $jumlah = 31; break;
            case 4:
            case 6:
            case 9:
            case 11: $jumlah = 30; break;
            case 2: $jumlah = 28; break;
            default:
                echo "Anda belum memilih bulan". exit();
        }
        echo "Jumlah hari = $jumlah";
    }
?>
</body>
</html>
