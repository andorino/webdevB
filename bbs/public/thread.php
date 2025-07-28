<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../functions.php';
require_once __DIR__ . '/../app/models/thread.php';
require_once __DIR__ . '/../app/models/post.php';

$pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$thread_id = $_GET['id'] ?? null;

if (!$thread_id) {
    echo 'スレッドIDが指定されていません。';
    exit;
}

$thread = get_thread_by_id($pdo, (int)$thread_id);
if (!$thread) {
    echo 'スレッドが見つかりません。';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '名無し');
    $comment = trim($_POST['comment'] ?? '');
    if ($comment !== '') {
        insert_post($pdo, (int)$thread_id, $name, $comment);
        exit;
    }
}

$posts = get_posts_by_thread($pdo, (int)$thread_id);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($thread['title']) ?></title>
</head>

<body>
    <h1><?= htmlspecialchars($thread['title']) ?></h1>

    <form method="POST">
        <p>名前（本名は呪われる可能性が高いので注意を）<input type="text" name="name" /></p>
        <p>コメント<textarea name="comment" rows="4" cols="40"></textarea></p>
        <p><input type="submit" value="投稿" /></p>
        <a href="/bbs/public/index.php">戻る</a>
    </form>

    <!-- <hr /> -->

    <?php if (empty($posts)): ?>
        <p>まだ投稿はありません。</p>
    <?php else: ?>
        <?php foreach ($posts as $post): ?>
            <div style=" color: white; margin:30px 90px 30px 90px; border-bottom:1px solid white;">
                <p><strong><?= htmlspecialchars($post['name']) ?></strong> さん</p>
                <p><?= nl2br(highlight_scary_words(htmlspecialchars($post['comment']))) ?></p>
                <p><small><?= htmlspecialchars($post['created_at']) ?></small></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>
<?php
function highlight_scary_words(string $text): string
{
    $scary_words = ['怖い', '幽霊', '死', '呪い', '闇', '墓', '怨念', '殺', '血', '首', '黒い影', '振り返ったら', '死ぬ', '死んだ', '亡くなった', '誰もいなかった', 'お前のせいだ', '助けて', '上の階はずっと空き部屋だよ', '覗いてる', 'お墓',];
    foreach ($scary_words as $word) {
        $pattern = '/' . preg_quote($word, '/') . '/u';
        $replacement = '<span style="color:red;">' . $word . '</span>';
        $text = preg_replace($pattern, $replacement, $text);
    }
    return $text;
}
?>