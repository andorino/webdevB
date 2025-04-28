<?php
# 1. 配列 ['赤', '青', '黄'] を作成し、foreach で各要素を1行ずつ表示してください。
$a = ['赤', '青', '黄'];
foreach ($a as $value) {
    echo $value . '<br>';
}
?>
<?php
# 2. ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100] の配列から「フルーツ名：価格円」と表示してください。
$a = ['りんご' => 150, 'バナナ' => 120, 'みかん' => 100];
foreach ($a as $key => $value) {
    echo $key . ':' . $value . '円';
}
?>
<?php
# 3. [100, 200, 300] という配列の合計値を求めて表示してください（foreach を使って）。
$a = [100, 200, 300];
$sum = 0;
foreach ($a as $value) {
    $sum += $value;
    echo $sum . '<br>';
}
?>
<br>
<?php
# 4. ['PHP', 'JavaScript', 'Python'] という配列に foreach を使って、インデックス番号と一緒に表示してください（例: 0: PHP）。
$a = ['PHP', 'JavaScript', 'Python'];
foreach ($a as $key => $value) {
    echo $key . ':' . $value . '<br>';
}
?>
<?php
# 5. ['A', 'B', 'C'] の各要素に「さん」を付けて表示してください（例: Aさん）
$a = ['A', 'B', 'C'];
foreach ($a as $value) {
    echo $value . 'さん' . '<br>';
}
?>

<?php
# 6. [10, 20, 30] の各値を2倍にして出力してください。
$a = [10, 20, 30];
foreach ($a as $value) {
    echo $value * 2 . '<br>';
}

#サンリオを配列で
$sanrio = [
    'キティちゃん',
    'シナモン',
    'ポムポムプリン',
    'マイメロディ',
    'リトルツインスターズ',
    'バッドバツ丸',
    'ハートくるみ',
    'ドロテア',
    'ハローキティ',
    'ハローキティマウス',
    'ハローキティマウスミニ',
    'ハローキティマウスミニマウス',
    'ハローキティマウスミニマウスミニ',
    'ハローキティマウスミニマウスミニマウス',
];
foreach ($sanrio as $value) {
    echo $value . '<br>';
}
