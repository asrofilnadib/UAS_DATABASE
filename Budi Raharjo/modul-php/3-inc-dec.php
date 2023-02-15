<?php
echo "<h3>Pre-increment</h3>";
$x = 10;
echo "Nilai \$x awal = $x <br />";
echo "Nilai ++\$x akan bernilai: " . ++$x . "<br />";
echo "Nilai \$x akhir: " . $x . "<br />";
 
echo "<h3>Post-incremen</h3>";
$x = 5;
echo "Nilai \$x awal = $x <br />";
echo "NIlai \$x++ akan bernilai: " . $x++ . "<br />";
echo "Nilai \$x akhir: " . $x . "<br />";
 
echo "<h3>Postdecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 5: " . $a-- . " (\$a--)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";
 
echo "<h3>Predecrement</h3>";
$a = 5;
echo "\$a = $a <br />";
echo "\$a akan bernilai 4: " . --$a . " (--\$a)<br />";
echo "\$a akan bernilai 4: " . $a . "<br />";
?>