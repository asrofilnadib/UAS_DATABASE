<?php
    if(isset($_POST['sbmtBTN'])){
        $nip = $_POST['nip'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $nohp = $_POST['notelp'];

        $conn = mysqli_connect('localhost', 'root'
            ,'', 'sipegdb');
        if (mysqli_connect_errno()){
            echo "Koneksi ke server gagal" . mysqli_connect_error();
        }

        $sql = "Insert into pegawai(nip, nama, alamat, nohp)".
            "VALUES ('$nip', '$nama', '$alamat', '$nohp')";

        mysqli_query($conn, $sql);
        $num = mysqli_affected_rows($conn);

        if ($num != 0){
            echo "Data yang anda inputkan telah dimasukkan kedalam server";
        } else {
            echo "Data yang anda inputkan gagal dimasukkan kedalam server";
        }
    }