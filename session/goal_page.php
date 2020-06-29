<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>確認ページ</title>
    <!-- セッション処理の基礎 -->
</head>
<body>
    <?php
        if(isset($_SESSION["coupon"])) {
            $coupon = $_SESSION["coupon"];
            $couponList = ["123456", "XXXXXX"];
            if(in_array($coupon, $couponList)) {
                echo $coupon, "は、正しいクーポンコードです！！";
            } else {
                echo $coupon, "は、誤ったクーポンコードです・・・。";
            }
        } else {
            echo "セッションエラー。";
        }
    ?>
</body>
</html>