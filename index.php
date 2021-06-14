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
    <h1>Check input</h1>
    <input type="number" name="input" placeholder="nhap so can kiem tra">
    <br>
    <input type="submit" value="check">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        array_push($arr, rand(1, 100));
    }
    $input = (int)$_POST["input"];
    if ($input < 0 || $input > 101) {
        echo 'khong hop le';
    } else {
        echo $arr[$input];
    }
}
?>
</body>
</html>
