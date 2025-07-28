<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Anton+SC&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Bungee&family=Dancing+Script&family=Darumadrop+One&family=Kiwi+Maru&family=Kumar+One&family=Moo+Lah+Lah&family=Noto+Serif+JP:wght@200..900&family=Vina+Sans&family=Waterfall&family=Yuji+Syuku&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
</head>

<h1>世にも恐ろしい掲示板</h2>
    <form action="index.php" method="POST">
        <input type="hidden" name="action" value="create_thread">
        <input type="text" name="new_thread_title" placeholder="怪談タイトルを入力" required>
        <button type="submit">怪談を作成</button>

    </form>

    <h2>怪談一覧</h2>
    <?php if (empty($threads)): ?>
        <p>まだ怪談はありません。</p>
    <?php else: ?>
        <ul>
            <?php foreach ($threads as $thread): ?>
                <li>
                    <a href="thread.php?id=<?= htmlspecialchars($thread['id']) ?>">
                        <?= htmlspecialchars($thread['title']) ?>
                    </a>
                    （<?= htmlspecialchars($thread['created_at']) ?>）
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>