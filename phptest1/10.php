<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : '名無し';
    $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8') : 'コメントなし';
    echo "{$name}さんのコメント:{$comment}";
} else {
    echo "不正なリクエストです。";
}
