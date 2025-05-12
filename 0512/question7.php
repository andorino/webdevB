<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>①次のif-elseif-else構文を代替構文にしてください。</p>
    <?php
    $num = 2;
    if ($num === 1) {
        echo "一です";
    } elseif ($num === 2) {
        echo "二です";
    } else {
        echo "それ以外です";
    }
    ?>

    <?php $num = 2;
    if ($num === 1) : ?>
        <p>
            <?php echo "一です"; ?>
        </p>
    <?php elseif ($num === 2): ?>
        <p>
            <?php echo "二です"; ?>
        </p>
    <?php else: ?>
        <p>
            <?php echo "それ以外です"; ?>
        </p>
    <?php endif; ?>



    <p>②以下のコードを代替構文に書き換えてください。</p>
    <?php
    $isMember = true;
    if ($isMember) {
        echo "<p>会員様向けの情報です。</p>";
    }
    ?>


    <?php $isMember = true;
    if ($isMember) : ?>
        <p>
            <?php echo "会員様向けの情報です。"; ?>
        </p>
    <?php endif; ?>

    <p>③HTMLのul要素の中で、for文を使ってli要素を5個出力するコードを代替構文で書いてください。<br>
        例：
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
    </p>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<li>$i</li>";
    }
    ?>

    <p>④以下のfor文を代替構文に書き換えてください。</p>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo "<p>番号: $i</p>";
    }
    ?>


    <?php
    for ($i = 1; $i <= 3; $i++): ?>
        <p>
            <?php echo "番号" . $i; ?>
        </p>
    <?php endfor; ?>

    <p>⑤HTMLの中で、foreachを使ってliリストを作る処理を代替構文で書いてください。<br>
        例：
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
    </ul>
    </p>

    <?php
    $numbers = [1, 2, 3, 4, 5];
    foreach ($numbers as $numbers) {
        echo "<li>$numbers</li>";
    }
    ?>
    <p>⑥以下のコードを代替構文に書き換えてください。</p>
    <?php
    $users = ['太郎', '花子', '次郎'];
    foreach ($users as $user) {
        echo "<p>{$user}さん、ようこそ！</p>";
    }
    ?>


    <?php
    $users = ['太郎', '花子', '次郎'];
    foreach ($users as $user): ?>
        <p>
            <?php echo $user; ?>さん、ようこそ！
        </p>
    <?php endforeach; ?>

</body>

</html>