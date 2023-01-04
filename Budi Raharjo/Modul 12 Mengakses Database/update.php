<?php
if (isset($_POST["SbmBTN"])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    $conn = mysqli_connect('localhost',
        'root', '', 'sipegdb');

    if (mysqli_connect_errno()){
        echo "Koneksi gagal ke server" . mysqli_connect_error();
        exit();
    }

    $sql = "update pegawai ".
        "set nama = '$nama', ".
        "    alamat = '$alamat', ".
        "    nohp = '$nohp'" .
        "where nip = '$nip";

    mysqli_query($conn, $sql);
    $num = mysqli_affected_rows($conn);

    if ($num!=0){
        echo "Data yang anda telah ubah telah dimasukan kedalam server";
        ?><br><br>
        <a href="showdata.php">Lihat Perubahan</a><?php
    } else {
        echo "Data yang anda masukan salah, 
        silahkan periksa kembali form anda";
    }
}
?>