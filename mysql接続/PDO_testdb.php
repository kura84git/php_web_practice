<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>データベース接続</title>
</head>
<body>
    <?php
        $user = "root";
        $password = "root";
        $dbName = "php7note"; //データベース名
        $host = "localhost:3307"; //サーバ
        $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8"; //DSN文字列
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE); //PreparedStatementのエミュレーションを無効にする
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //例外がスローされる設定にする
            echo "データベース{$dbName}に接続しました。";
            $pdo = NULL; //接続を解除する
        } catch(Exception $e) {
            echo "エラ－がありました";
            echo $e->getMessage();
            exit();
        }
    ?>
</body>
</html>