<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numeric</title>
</head>
<body>

<?php
$a = 32;
echo "a is " . is_numeric($a) . "<br>";

$b = 0;
echo "b is " . is_numeric($b) . "<br>";

$c = "32.5";
echo "c is " . is_numeric($c) . "<br>";

$d = "32";
echo "d is " . is_numeric($d) . "<br>";

$e = "89";
echo "e is " . is_numeric($e) . "<br>";

$f = "true";
echo "e is " . is_numeric($e) . "<br>";

$g = "null";
echo "f is " . is_numeric($f) . "<br>";f

?>
    
</body>
</html>