<?php
    $user = "root";
    $password = "root";
    $dbName = "php7note"; //データベース名
    $host = "localhost:3307"; //サーバ
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8"; //DSN文字列
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SELECT文の練習</title>
</head>
<body>
    <?php
        try {
            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE); //PreparedStatementのエミュレーションを無効にする
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //例外がスローされる設定にする
            echo "データベース{$dbName}に接続しました。";

            $sql = "SELECT * FROM member";
            $stm = $pdo->prepare($sql);
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);

            echo "<table>";
            echo "<tr>";
            echo "<th>", "ID", "</th>";
            echo "<th>", "名前", "</th>";
            echo "<th>", "年齢", "</th>";
            echo "</tr>";
            foreach($result as $row) {
                echo "<tr>";
                echo "<td>", "{$row['id']}", "</td>";
                echo "<td>", "{$row['name']}", "</td>";
                echo "<td>", "{$row['age']}", "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } catch(Exception $e) {
            echo "エラ－がありました";
            echo $e->getMessage();
            exit();
        }
    ?>
</body>
</html>