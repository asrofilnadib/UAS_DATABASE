<html>
<head>
    <title>Statement Continue</title>
</head>
<body>
<?php
for ($i=0; $i<=30; $i++){
    if ($i % 2 == 0) continue;
    echo $i . ' ';
}
?>
</body>
</html>