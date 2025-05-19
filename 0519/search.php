<?php
require_once 'function.php';
$results = [];
$keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

$fp = fopen('songs.csv', 'r');
if ($fp === false) {
    echo 'ファイルのオープンに失敗しました。';
    exit;
}

while ($row = fgetcsv($fp)) {
    $combined = implode(' ', $row); // 全ての列を検索対象にする

    if ($keyword === '' || mb_stripos($combined, $keyword) !== false) {
        $results[] = $row;
    }
}
fclose($fp);
?>


<?php if (!empty($results)): ?>
    <h2>検索結果</h2>
    <ul>
        <?php foreach ($results as $row): ?>
            <li>
                曲名：<?= str2html($row[0], ENT_QUOTES, 'UTF-8') ?><br>
                アーティスト名：<?= str2html($row[1], ENT_QUOTES, 'UTF-8') ?><br>
                ジャンル：<?= str2html($row[2], ENT_QUOTES, 'UTF-8') ?><br>
                年：<?= str2html($row[3], ENT_QUOTES, 'UTF-8') ?><br>
                備考：<?= str2html($row[4], ENT_QUOTES, 'UTF-8') ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php elseif ($keyword !== ''): ?>
    <p>「<?= str2html($keyword) ?>」に一致する曲は見つかりませんでした。</p>
<?php endif; ?>