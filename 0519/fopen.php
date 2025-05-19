<!-- HTMLのコメント -->
<?php
require_once('function.php');
//一回だけ読み込む
//requireは、読み込まれないとエラーになる止まる
//データを読み込む（だけ）
$fp = fopen('bookdata.csv', 'r');


if ($fp === false) {
    echo 'ファイルのオープンに失敗しました';
    exit;
}

while ($row = fgetcsv($fp)) {
    echo '<ul>';
    echo '<li>' . "書籍名："  . str2html($row[0], ENT_QUOTES, 'UTF-8') . '</li>';
    echo '<li>' . "著者名："  . str2html($row[4], ENT_QUOTES, 'UTF-8') . '</li>';
    echo '</ul>';
}
?>