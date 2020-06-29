<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>計算ページ</title>
    <!-- フォームの作成と結果表示を同じファイルで行う -->
</head>
<body>
    <?php
        if(isset($_POST["mile"])) {
            $isNum = is_numeric($_POST["mile"]);
            if($isNum) {
                $mile = $_POST["mile"];
                $error = "";
            } else {
                $mile = "";
                $error = "←数値を入力してください。";
            }
        } else {
            $isNum = FALSE;
            $error = "";
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <!-- 現在のファイル名をスーパーグローバル変数$_SERVERを使い、$_SERVER['PHP_SELF']で取得 -->
        <ul>
            <li>
                <label>マイルをkmに換算：
                <input type="text" name="mile" value="<?php if(isset($mile)) { echo $mile; } ?>">
                </label>
                <?php echo $error; ?>
            </li>
            <li><input type="submit" value="計算する"></li>
        </ul>
    </form>
    <?php
        if($isNum) {
            echo "<HR>";
            $kilometer = $mile * 1.609344;
            echo "{$mile} マイルは {$kilometer}kmです。";
        }
    ?>
</body>
</html>