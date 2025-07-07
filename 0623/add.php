<?php
# connect1.php
require_once("functions.php");
include __DIR__ . '/inc/error_check.php';



try {
    $dbh = db_open();
    $user = 'phpuser';
    $password = '20250609'; // 任意のパスワード
    //PDDを使ってMySQLに接続
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db;charset=utf8', $user, $password, $opt);
    //変数にSQLを代入
    $sql = 'INSERT INTO books(id,title,isbn,price,publish,author)VALUES(NULL,:title, :isbn, :price, :publish, :author)';
    $stmt = $dbh->prepare($sql);

    // var_dump($stmt);
    $price = (int) $_POST['price'];
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(':price', $price, PDO::PARAM_INT);
    $stmt->bindParam(':publish', $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(':author', $_POST['author'], PDO::PARAM_STR);


    $stmt->execute();
    echo "データが追加されました。<br>";
    echo "<a href='connect1.php'>リストへ戻る</a>";
} catch (PDOException $e) {
    echo "エラー！:" . str2html($e->getMessage()) . "<br>";
    exit;
}
