<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>フォーム入力チェック</title>
</head>
<body>
<?php
    //エラーフラグ
    $isError = FALSE;
    if(isset($_POST["name"])) {
        $name = trim($_POST["name"]);
        if($name === "") {
            $isError = TRUE;
        }
    } else {
        $isError = true;
    }
?>
<?php if($isError) { ?>
    <div>名前を入力してください。</div>
    <form action="nameCheckForm.php" method="post">
        <input type="submit" value="戻る">
    </form>
<?php } else { ?>
    <div>こんにちは、<?php echo $name; ?>さん。</div>
<?php } ?>
</body>
</html>