<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Number1: <input type="text" name="number1">
    <br>
    Number2: <input type="text" name="number2">
    <br>
    <input type="submit" value="Divide">
</form>
</body>
</html>


<?php
include_once "DivideByZeroException.php";

$numerator = $_REQUEST["number1"];
$denominator = $_REQUEST["number2"];

/**
 * @throws DivideByZeroException
 */
function divide($numerator, $denominator): float|int
{
    if ($denominator == 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}
try {
    $result = divide($numerator, $denominator);
    echo $result;
} catch (DivideByZeroException $e) {
    echo 'Có lỗi xảy ra: ' . $e;
}

?>