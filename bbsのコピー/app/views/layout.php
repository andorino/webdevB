<?php require_once __DIR__ . '/../../functions.php'; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Anton+SC&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Bungee&family=Dancing+Script&family=Darumadrop+One&family=Kiwi+Maru&family=Kumar+One&family=Moo+Lah+Lah&family=Noto+Serif+JP:wght@200..900&family=Vina+Sans&family=Waterfall&family=Yuji+Syuku&family=Zen+Maru+Gothic:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <h1>掲示板</h1>

    <?php if (!empty($errors)): ?>
        <ul style="color:red;">
            <?php foreach ($errors as $error): ?>
                <li><?= str2html($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php include __DIR__ . '/index.php'; ?>
</body>

</html>