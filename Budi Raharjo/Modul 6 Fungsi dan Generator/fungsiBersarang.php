<html>
<head>
    <title>Demo Penggunaan Fungsi Bersarang (Nested Function)</title>
</head>
<h2>Nested Function zerofill</h2>
<body>

<?php
    function zerofill($number, $len)
    {
        if (!function_exists("IntToStr")) {
            function IntToStr($x)
            {
                return strval($x);
            }
        }
        $temp = '';
        if ($len > strlen(IntToStr($number))) {
            $zcount = $len - strlen(IntToStr($number));
            for ($i = 0; $i < $zcount; $i++) {
                $temp .= '0';
            }
            $temp .= IntToStr($number);
        }
        return $temp;
    }
    echo zerofill(123, 4). '<br>';
    echo zerofill(123, 5). '<br>';
    echo zerofill(123, 6). '<br>';
    echo zerofill(123, 7);
?>

</body>
</html>
