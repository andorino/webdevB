<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Anton+SC&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Bungee&family=Dancing+Script&family=Darumadrop+One&family=Kiwi+Maru&family=Kumar+One&family=Moo+Lah+Lah&family=Noto+Serif+JP:wght@200..900&family=Vina+Sans&family=Waterfall&family=Yuji+Syuku&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
</head>

<h1><?= htmlspecialchars($thread['title']) ?></h1>


<form method="POST">
    <p>名前：<input type="text" name="name" /></p>
    <p>コメント：<textarea name="comment" rows="4" cols="40"></textarea></p>
    <p><input type="submit" value="投稿" /></p>
</form>

<hr />


<?php foreach ($posts as $post): ?>
    <div style="margin-bottom: 20px">
        <p><strong><?= htmlspecialchars($post['name']) ?></strong> さん</p>
        <p><?= nl2br(htmlspecialchars($post['comment'])) ?></p>
        <p><small><?= htmlspecialchars($post['created_at']) ?></small></p>
    </div>
<?php endforeach; ?>