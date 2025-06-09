<?php
# connect1.php
require_once './functions.php';


try {
  $dbh = db_open();
  $sql = 'SELECT title, author FROM books';
  //SQL分を実行→結果を変数に代入配列で取得
  $statement = $dbh->query($sql);

  while ($row = $statement->fetch()) {
    echo "書籍名: " . str2html($row[0]) . "<br>";
    echo "書籍名: " . str2html($row[1]) . "<br><br>";
  }

  // var_dump($dbh);
} catch (PDOException $e) {
  //例外をcatchしてエラーメッセージを表示
  echo '接続失敗: ' . str2html($e->getMessage()) . "<br>";
  exit;
};
