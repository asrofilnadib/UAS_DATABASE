<?php
if (isset($_POST["simpan"])){
    $nik = $_POST['nik'];
	$nkk = $_POST['nkk'];
    $nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
	$agama = $_POST['agama'];
	$kode = $_POST['kode'];

    require('connectdb.php');

    $sql = "update warga ".
        "set `nik` = '$nik', ".
        "    `nkk` = '$nkk', ".
        "    `nama` = '$nama', ".
        "    `tgl_lahir` = '$tgl_lahir'," .
		"    `jk` = '$jk'," .
        "    `agama` = '$agama'," .
        "     `kode_kategori` = '$kode'" .
        "where `nik` = '$nik";

    mysqli_query($conn, $sql);
    $num = mysqli_affected_rows($conn);

    if ($num!=0){
        echo "Data yang anda telah ubah telah dimasukan kedalam server";
        ?><br><br>
        <a href="show_dataP.php">Lihat Perubahan</a><?php
    } else {
        echo "Data yang anda masukan salah, 
        silahkan periksa kembali form anda";
    }
}
?>