<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>フォーム入力処理の基本</title>
</head>
<body>
    <form action="calc.php" method="post">
        <ul>
            <li><label>単価：<input type="number" name="tanka"></label></li>
            <li><label>個数：<input type="number" name="kosu"></label></li>
            <li><input type="submit" value="計算する"></li>
        </ul>
    </form>
</body>
</html>