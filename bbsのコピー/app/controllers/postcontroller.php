<?php

require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../models/post.php';
require_once __DIR__ . '/../../functions.php';
require_once __DIR__ . '/../models/thread.php';

// DB接続
$pdo = new PDO($config['dsn'], $config['user'], $config['pass']);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['new_thread_title'])) {
    $title = trim($_POST['new_thread_title']);
    if ($title !== '') {
        create_thread($pdo, $title);
        header('Location: index.php');
        exit;
    }
}

// バリデーション関数
function validate_post(string $name, string $comment): array
{
    $errors = [];
    if ($name === '') {
        $errors[] = '名前を入力してください。';
    }
    if ($comment === '') {
        $errors[] = 'コメントを入力してください。';
    }
    return $errors;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['comment'])) {
    $name = trim($_POST['name']);
    $comment = trim($_POST['comment']);

    $errors = validate_post($name, $comment);

    if (empty($errors)) {
        $thread_id = $_GET['id'] ?? null;

        if ($thread_id === null) {
            die('スレッドIDが指定されていません。');
        }

        insert_post($pdo, (int)$thread_id, $name, $comment);
        header('Location: ' . $_SERVER['PHP_SELF'] . '?id=' . $thread_id);
        exit;
    }
}

$threads = get_all_threads($pdo); // スレッド一覧取得
$posts = get_all_posts($pdo);

require_once __DIR__ . '/../views/index.php';
