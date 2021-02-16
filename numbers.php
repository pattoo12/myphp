<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numbers</title>
</head>
<body>
<?php
$w=465.55;
$x=1555;
var_dump(is_float($w)); echo "-----"; var_dump(is_int($w));
echo '<br>';
var_dump(is_float($x)); echo "------"; var_dump(is_int($x));
echo '<br>';
var_dump(is_double($w)); echo "------"; var_dump(is_long($w));
echo '<br>';
var_dump(is_double($x)); echo "------"; var_dump(is_long($x));
echo '<br>';

$z=1.56e560;
$y="636336";
var_dump(is_double($z)); echo '------'; var_dump(is_finite($z)); echo '------'; var_dump(is_infinite($z));
echo '<br>';
var_dump(is_float($y)); echo '------'; var_dump(is_int($y)); echo '------'; var_dump($y);echo '------'; var_dump(is_numeric($y));


?>
</body>
</html>
