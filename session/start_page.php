<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>セッション開始ページ</title>
    <!-- セッション処理の基礎 -->
</head>
<body>
    <div>このページから購入するとクーポン割引が適用されます。</div>
    <?php
        $_SESSION["coupon"] = "123456";
    ?>
    <a href="goal_page.php">NEXT PAGE!</a>
</body>
</html>