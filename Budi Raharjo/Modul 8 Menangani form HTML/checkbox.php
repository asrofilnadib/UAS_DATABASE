<?php
    $hobi = $_POST['hobi'];

    echo "<p>Hobi yang anda pilih adalah:<br></p>";
    foreach ($hobi as $nilai){
        echo "- $nilai<br>";
    }