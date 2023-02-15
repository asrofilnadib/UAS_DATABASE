<?php
    if (isset($_POST['btnSubmit'])){
        $data = $_POST['data'];

        $conn = mysqli_connect('localhost', 'root',
            '', 'sipegdb');

        if (mysqli_connect_errno()){
            echo "Gagal untuk masuk kedalam server" . mysqli_connect_error();
            exit();
        }

        for ($i=0; $i < sizeof($data); $i++){
            $sql = "delete from pegawai ".
                "where nip = '$data[$i]'";

            mysqli_query($conn, $sql);
        }

        $num = mysqli_affected_rows($conn);

        if ($num != 0) {
            echo "$num baris data telah dihapus";
            ?><br><br>
            <a href="showdata.php">Lihat Perubahan</a><?php
        } else {
            echo "Penghapusan data gagal dilakukan";
        }
    }