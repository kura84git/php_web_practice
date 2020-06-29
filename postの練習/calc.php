<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>フォーム入力の値で計算する</title>
</head>
<body>
<?php
    $tanka = $_POST["tanka"];
    $kosu = $_POST["kosu"];
    $price = $tanka * $kosu;
    $tanka = number_format($tanka);
    $price = number_format($price); //3桁のカンマ区切り
    echo "単価{$tanka}円 × {$kosu}個 は {$price}円です！！";
?>
</body>
</html>