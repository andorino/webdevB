
<?php

include __DIR__ . '/inc/functions.php';

if (empty($_GET['id'])) {
  //idが空の時はエラー
  echo 'IDが指定されていません。';
  exit;
}
if (!preg_match('/\A\d{1,11}+\z/u', $_GET['id'])) {
  //idが数字以外のときはエラー
  echo 'IDが正しくありません。';
  exit;
}

$id = (int) $_GET['id'];
// echo $id;


$dbh = db_open();
$sql = 'SELECT * FROM books WHERE id = :id';
$stml = $dbh->prepare($sql);
$stml->bindParam(':id', $id, PDO::PARAM_INT);
$stml->execute();
$result = $stml->fetch(PDO::FETCH_ASSOC);
if (!$result) {
  echo '指定したデータはありません。';
  exit;
}

// var_dump($result);

$title = str2html($result['title']);
$isbn = str2html($result['isbn']);
$price = str2html($result['price']);
$publish = str2html($result['publish']);
$author = str2html($result['author']);
$id = str2html($result['id']);

$html_form = <<<EOD
<form action="update.php" method="post">
  <p>
    <label for="title">書籍名</label>
    <input type="text" id="title" name="title" value="$title" required>
  </p>
  <p>
    <label for="isbn">ISBN</label>
    <input type="text" id="isbn" name="isbn" value="$isbn">
  </p>
  <p>
    <label for="price">価格</label>
    <input type="number" id="price" name="price" value="$price">
  </p>
  <p>
    <label for="publish">出版日</label>
    <input type="date" id="publish" name="publish" value="$publish">
  </p>
  <p>
    <label for="author">著者名</label>
    <input type="text" id="author" name="author" value="$author">
  </p>
  <p>
    <input type="hidden" name="id" value="$id">
  </p>
  <button type="submit">送信する</button>
</form>
EOD;
include __DIR__ . '/inc/header.php';
echo $html_form;
include __DIR__ . '/inc/footer.php';
