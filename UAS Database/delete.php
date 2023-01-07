<?php
    if (isset($_POST['hapus'])){
        $data = $_POST['data'];

        require ('connectdb.php');

        for ($i=0; $i < sizeof($data); $i++){
            $sql = "delete from warga ".
                "where nik = '$data[$i]'";

            mysqli_query($conn, $sql);
        }

        $num = mysqli_affected_rows($conn);

        if ($num != 0) {
            echo "$num baris data telah dihapus";
            ?><br><br>
            <a href="show_dataW.php">Lihat Perubahan</a><?php
        } else {
            echo "Penghapusan data gagal dilakukan";
        }
    }